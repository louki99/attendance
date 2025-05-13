<?php
// This file is part of Moodle - http://moodle.org/
//
require_once('../../config.php');
require_once($CFG->dirroot.'/mod/attendance/classes/notification_helper.php');
require_login();

// Make sure the user has admin rights
if (!is_siteadmin()) {
    echo "You need to be a site admin to run this test.";
    exit;
}

echo "<h2>Testing String Replacement for Notifications</h2>";

$shortname = "TESTCOURSE";
$subject = get_string('new_session_notification_subject', 'attendance', $shortname);
$smallmessage = get_string('new_session_notification_small', 'attendance', $shortname);

echo "<p><strong>Subject with parameter:</strong> $subject</p>";
echo "<p><strong>Small message with parameter:</strong> $smallmessage</p>";

echo "<h3>Testing Manual String Replacement</h3>";
$rawsubject = get_string('new_session_notification_subject', 'attendance');
$replaced = str_replace('{$a}', $shortname, $rawsubject);
echo "<p><strong>Raw subject:</strong> $rawsubject</p>";
echo "<p><strong>After replacement:</strong> $replaced</p>";

echo "<h3>Debugging Notification Helper</h3>";
$course = new stdClass();
$course->shortname = $shortname;
$course->id = 1;

$attendance = new stdClass();
$attendance->name = "Test Attendance";

$session = new stdClass();
$session->sessdate = time();
$session->duration = 3600;
$session->description = "Test Session";

class MockNotificationHelper extends \mod_attendance\notification_helper {
    public static function test_subject_replacement($course) {
        $subject = get_config('attendance', 'new_session_notification_subject');
        if (empty($subject)) {
            $subject = get_string('new_session_notification_subject', 'attendance', $course->shortname);
        } else {
            // Replace {$a} with course shortname in custom subject
            $subject = str_replace('{$a}', $course->shortname, $subject);
        }
        return $subject;
    }
}

echo "<p><strong>Testing subject replacement method:</strong> " . 
    MockNotificationHelper::test_subject_replacement($course) . "</p>";

echo "<p>If the test shows the course shortname (TESTCOURSE) in place of '{" . "$" . "a}' in all tests, then the fix was successful.</p>"; 