<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_attendance;

defined('MOODLE_INTERNAL') || die();

/**
 * Class for managing queued attendance notifications
 *
 * @package    mod_attendance
 * @copyright  2023
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class notification_queue {
    /**
     * Add a message to the queue for later processing
     *
     * @param \core\message\message $message The message object to queue
     * @param int $timetoprocess Optional time to process the message (defaults to now)
     * @return int The ID of the queued message
     */
    public static function queue_message(\core\message\message $message, $timetoprocess = 0) {
        global $DB;

        if ($timetoprocess <= 0) {
            $timetoprocess = time();
        }

        $record = new \stdClass();
        $record->component = $message->component;
        $record->name = $message->name;
        $record->userfromid = $message->userfrom->id;
        $record->usertoid = $message->userto->id;
        $record->subject = $message->subject;
        $record->fullmessage = $message->fullmessage;
        $record->fullmessageformat = $message->fullmessageformat;
        $record->fullmessagehtml = $message->fullmessagehtml;
        $record->smallmessage = $message->smallmessage;
        $record->notification = $message->notification;
        $record->courseid = isset($message->courseid) ? $message->courseid : 0;
        $record->timecreated = time();
        $record->timetoprocess = $timetoprocess;
        $record->sent = 0;

        return $DB->insert_record('attendance_notification_queue', $record);
    }

    /**
     * Process queued messages that are due
     *
     * @param int $limit Maximum number of messages to process in one run
     * @return int Number of messages processed
     */
    public static function process_queue($limit = 100) {
        global $DB;

        $time = time();
        $count = 0;

        // Get the next batch of messages that need to be sent.
        $sql = "SELECT * FROM {attendance_notification_queue}
                WHERE sent = 0 AND timetoprocess <= :time
                ORDER BY timetoprocess ASC, id ASC";
        $params = ['time' => $time];
        $records = $DB->get_recordset_sql($sql, $params, 0, $limit);

        foreach ($records as $record) {
            // Convert record to message object.
            $message = new \core\message\message();
            $message->component = $record->component;
            $message->name = $record->name;
            $message->userfrom = \core_user::get_user($record->userfromid);
            $message->userto = \core_user::get_user($record->usertoid);
            $message->subject = $record->subject;
            $message->fullmessage = $record->fullmessage;
            $message->fullmessageformat = $record->fullmessageformat;
            $message->fullmessagehtml = $record->fullmessagehtml;
            $message->smallmessage = $record->smallmessage;
            $message->notification = $record->notification;
            if (!empty($record->courseid)) {
                $message->courseid = $record->courseid;
            }

            // Send the message.
            try {
                $result = message_send($message);
                // Mark message as sent regardless of result to avoid retrying failed messages.
                $DB->set_field('attendance_notification_queue', 'sent', 1, ['id' => $record->id]);
                $count++;
            } catch (\Exception $e) {
                // Log the error but still mark as sent to avoid retrying.
                debugging('Error sending queued message: ' . $e->getMessage(), DEBUG_DEVELOPER);
                $DB->set_field('attendance_notification_queue', 'sent', 1, ['id' => $record->id]);
            }
        }
        $records->close();

        return $count;
    }
} 