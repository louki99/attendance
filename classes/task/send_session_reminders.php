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

namespace mod_attendance\task;

defined('MOODLE_INTERNAL') || die();

class send_session_reminders extends \core\task\scheduled_task {
    /**
     * Get a descriptive name for this task
     *
     * @return string
     */
    public function get_name() {
        return get_string('send_session_reminders', 'attendance');
    }

    /**
     * Execute the task
     */
    public function execute() {
        global $DB;

        // Get sessions that are starting in the next 24 hours
        $now = time();
        $nextday = $now + (24 * 60 * 60);

        $sql = "SELECT s.*, a.course, a.name as attendance_name, t.teacherid
                FROM {attendance_sessions} s
                JOIN {attendance} a ON a.id = s.attendanceid
                JOIN {attendance_session_teachers} t ON t.sessionid = s.id
                WHERE s.sessdate > :now
                AND s.sessdate <= :nextday
                AND s.sessdate > :lastcheck";

        $params = [
            'now' => $now,
            'nextday' => $nextday,
            'lastcheck' => $now - (60 * 60) // Don't send reminders for sessions in the past hour
        ];

        $sessions = $DB->get_records_sql($sql, $params);

        foreach ($sessions as $session) {
            $course = $DB->get_record('course', ['id' => $session->course]);
            if (!$course) {
                continue;
            }

            $attendance = (object)[
                'id' => $session->attendanceid,
                'name' => $session->attendance_name
            ];

            // Send reminder to the monitor
            \mod_attendance\notification_helper::send_session_reminder(
                $session,
                $course,
                $attendance,
                $session->teacherid
            );
        }
    }
} 