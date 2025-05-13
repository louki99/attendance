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

require_once($CFG->dirroot . '/message/lib.php');
require_once($CFG->dirroot . '/lib/messagelib.php');

class notification_helper {
    /**
     * Send notification to monitor when a new session is created
     *
     * @param stdClass $session The session object
     * @param stdClass $course The course object
     * @param mod_attendance_structure $attendance The attendance object
     * @param int $monitorid The monitor's user ID
     * @return bool Success status
     */
    public static function notify_new_session($session, $course, $attendance, $monitorid) {
        global $DB, $USER;

        debugging('Inside notify_new_session method with monitor ID: ' . $monitorid);
        
        $monitor = $DB->get_record('user', ['id' => $monitorid]);
        if (!$monitor) {
            debugging('Monitor user not found with ID: ' . $monitorid);
            return false;
        }
        
        debugging('Found monitor user: ' . $monitor->firstname . ' ' . $monitor->lastname . ' (Email: ' . $monitor->email . ')');

        $sessiondate = userdate($session->sessdate, get_string('strftimedatetime', 'langconfig'));
        $sessionend = userdate($session->sessdate + $session->duration, get_string('strftimedatetime', 'langconfig'));

        // Get custom subject and message from settings
        $subject = get_config('attendance', 'new_session_notification_subject');
        if (empty($subject)) {
            $subject = get_string('new_session_notification_subject', 'attendance', $course->shortname);
        } else {
            // Replace {$a} with course shortname in custom subject
            $subject = str_replace('{$a}', $course->shortname, $subject);
        }
        
        debugging('Using notification subject: ' . $subject);

        $message = get_config('attendance', 'new_session_notification_message');
        if (empty($message)) {
            $message = get_string('new_session_notification_message', 'attendance', [
                'course' => $course->fullname,
                'attendance' => $attendance->name,
                'date' => $sessiondate,
                'end' => $sessionend,
                'description' => $session->description
            ]);
        } else {
            $message = str_replace(
                ['{$a->course}', '{$a->attendance}', '{$a->date}', '{$a->end}', '{$a->description}'],
                [$course->fullname, $attendance->name, $sessiondate, $sessionend, $session->description],
                $message
            );
        }
        
        debugging('Prepared message body: ' . substr($message, 0, 100) . '...');

        $messageobj = new \core\message\message();
        $messageobj->component = 'mod_attendance';
        $messageobj->name = 'new_session';
        $messageobj->userfrom = $USER;
        $messageobj->userto = $monitor;
        $messageobj->subject = $subject;
        $messageobj->fullmessage = $message;
        $messageobj->fullmessageformat = FORMAT_HTML;
        $messageobj->fullmessagehtml = $message;
        
        // Fix for smallmessage to replace {$a} with actual course shortname
        $smallmessage = get_string('new_session_notification_small', 'attendance', $course->shortname);
        $messageobj->smallmessage = $smallmessage;
        
        $messageobj->notification = 1;
        $messageobj->courseid = $course->id;

        debugging('About to queue message for async sending');
        $result = \mod_attendance\notification_queue::queue_message($messageobj);
        debugging('Message queued with ID: ' . $result);
        
        return $result > 0;
    }

    /**
     * Send reminder notification for upcoming sessions
     *
     * @param stdClass $session The session object
     * @param stdClass $course The course object
     * @param mod_attendance_structure $attendance The attendance object
     * @param int $monitorid The monitor's user ID
     * @return bool Success status
     */
    public static function send_session_reminder($session, $course, $attendance, $monitorid) {
        global $DB, $USER;

        $monitor = $DB->get_record('user', ['id' => $monitorid]);
        if (!$monitor) {
            return false;
        }

        $sessiondate = userdate($session->sessdate, get_string('strftimedatetime', 'langconfig'));
        $sessionend = userdate($session->sessdate + $session->duration, get_string('strftimedatetime', 'langconfig'));

        // Get custom subject and message from settings
        $subject = get_config('attendance', 'session_reminder_subject');
        if (empty($subject)) {
            $subject = get_string('session_reminder_subject', 'attendance', $course->shortname);
        } else {
            // Replace {$a} with course shortname in custom subject
            $subject = str_replace('{$a}', $course->shortname, $subject);
        }

        $message = get_config('attendance', 'session_reminder_message');
        if (empty($message)) {
            $message = get_string('session_reminder_message', 'attendance', [
                'course' => $course->fullname,
                'attendance' => $attendance->name,
                'date' => $sessiondate,
                'end' => $sessionend,
                'description' => $session->description
            ]);
        } else {
            $message = str_replace(
                ['{$a->course}', '{$a->attendance}', '{$a->date}', '{$a->end}', '{$a->description}'],
                [$course->fullname, $attendance->name, $sessiondate, $sessionend, $session->description],
                $message
            );
        }

        $messageobj = new \core\message\message();
        $messageobj->component = 'mod_attendance';
        $messageobj->name = 'session_reminder';
        $messageobj->userfrom = $USER;
        $messageobj->userto = $monitor;
        $messageobj->subject = $subject;
        $messageobj->fullmessage = $message;
        $messageobj->fullmessageformat = FORMAT_HTML;
        $messageobj->fullmessagehtml = $message;
        
        // Fix for smallmessage to replace {$a} with actual course shortname
        $smallmessage = get_string('session_reminder_small', 'attendance', $course->shortname);
        $messageobj->smallmessage = $smallmessage;
        
        $messageobj->notification = 1;
        $messageobj->courseid = $course->id;

        // Queue the message for asynchronous sending
        $result = \mod_attendance\notification_queue::queue_message($messageobj);
        return $result > 0;
    }

    /**
     * Send notification to a student (candidat) when a new session is created
     *
     * @param stdClass $session The session object
     * @param stdClass $course The course object
     * @param mod_attendance_structure $attendance The attendance object
     * @param int $studentid The student's user ID
     * @return bool Success status
     */
    public static function notify_new_session_student($session, $course, $attendance, $studentid) {
        global $DB, $USER;

        $student = $DB->get_record('user', ['id' => $studentid]);
        if (!$student) {
            return false;
        }

        $sessiondate = userdate($session->sessdate, get_string('strftimedatetime', 'langconfig'));
        $sessionend = userdate($session->sessdate + $session->duration, get_string('strftimedatetime', 'langconfig'));

        // Get custom subject and message for students from settings
        $subject = get_config('attendance', 'new_session_notification_subject_student');
        if (empty($subject)) {
            $subject = get_string('new_session_notification_subject_student', 'attendance', $course->shortname);
        } else {
            // Replace {$a} with course shortname in custom subject
            $subject = str_replace('{$a}', $course->shortname, $subject);
        }

        $message = get_config('attendance', 'new_session_notification_message_student');
        if (empty($message)) {
            $message = get_string('new_session_notification_message_student', 'attendance', [
                'course' => $course->fullname,
                'attendance' => $attendance->name,
                'date' => $sessiondate,
                'end' => $sessionend,
                'description' => $session->description
            ]);
        } else {
            $message = str_replace(
                ['{$a->course}', '{$a->attendance}', '{$a->date}', '{$a->end}', '{$a->description}'],
                [$course->fullname, $attendance->name, $sessiondate, $sessionend, $session->description],
                $message
            );
        }

        $messageobj = new \core\message\message();
        $messageobj->component = 'mod_attendance';
        $messageobj->name = 'new_session_student';
        $messageobj->userfrom = $USER;
        $messageobj->userto = $student;
        $messageobj->subject = $subject;
        $messageobj->fullmessage = $message;
        $messageobj->fullmessageformat = FORMAT_HTML;
        $messageobj->fullmessagehtml = $message;
        
        // Fix for smallmessage to replace {$a} with actual course shortname
        $smallmessage = get_string('new_session_notification_small_student', 'attendance', $course->shortname);
        $messageobj->smallmessage = $smallmessage;
        
        $messageobj->notification = 1;
        $messageobj->courseid = $course->id;

        // Queue the message for asynchronous sending
        $result = \mod_attendance\notification_queue::queue_message($messageobj);
        return $result > 0;
    }
} 