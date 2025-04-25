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

/**
 * Take Attendance
 *
 * @package    mod_attendance
 * @copyright  2011 Artem Andreev <andreev.artem@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__).'/../../config.php');
require_once(dirname(__FILE__).'/locallib.php');

$pageparams = new mod_attendance_take_page_params();

$id                     = required_param('id', PARAM_INT);
$pageparams->sessionid  = required_param('sessionid', PARAM_INT);
$pageparams->grouptype  = required_param('grouptype', PARAM_INT);
$pageparams->sort       = optional_param('sort', ATT_SORT_DEFAULT, PARAM_INT);
$pageparams->copyfrom   = optional_param('copyfrom', null, PARAM_INT);
$pageparams->viewmode   = optional_param('viewmode', null, PARAM_INT);
$pageparams->gridcols   = optional_param('gridcols', null, PARAM_INT);
$pageparams->page       = optional_param('page', 1, PARAM_INT);
$pageparams->perpage    = optional_param('perpage', get_config('attendance', 'resultsperpage'), PARAM_INT);

$cm             = get_coursemodule_from_id('attendance', $id, 0, false, MUST_EXIST);
$course         = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
$att            = $DB->get_record('attendance', ['id' => $cm->instance], '*', MUST_EXIST);
// Check this is a valid session for this attendance.
$session        = $DB->get_record('attendance_sessions', ['id' => $pageparams->sessionid, 'attendanceid' => $att->id],
                                  '*', MUST_EXIST);

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/attendance:takeattendances', $context);

$pageparams->group = groups_get_activity_group($cm, true);

$pageparams->init($course->id);
$att = new mod_attendance_structure($att, $cm, $course, $PAGE->context, $pageparams);

$allowedgroups = groups_get_activity_allowed_groups($cm);
$accessallgroups = has_capability('moodle/site:accessallgroups', $context);
if (!$accessallgroups && !empty($pageparams->grouptype) && !array_key_exists($pageparams->grouptype, $allowedgroups)) {
     $group = groups_get_group($pageparams->grouptype);
     throw new moodle_exception('cannottakeforgroup', 'attendance', '', $group->name);
}

// Debug session information
debugging('Session ID: ' . $pageparams->sessionid, DEBUG_DEVELOPER);
$session = $DB->get_record('attendance_sessions', ['id' => $pageparams->sessionid]);
debugging('Session details: ' . print_r($session, true), DEBUG_DEVELOPER);

// Debug session students
$sessionstudents = $DB->get_records('attendance_session_students', ['sessionid' => $pageparams->sessionid]);
debugging('Number of students assigned to session: ' . count($sessionstudents), DEBUG_DEVELOPER);
debugging('Session students: ' . print_r($sessionstudents, true), DEBUG_DEVELOPER);

// Get students based on session assignments with all required user fields
$userfieldsapi = \core_user\fields::for_userpic();
$userfields = $userfieldsapi->get_sql('u', false, '', '', false)->selects;

$sql = "SELECT DISTINCT $userfields
          FROM {attendance_session_students} ass
          JOIN {user} u ON u.id = ass.studentid
         WHERE ass.sessionid = :sessionid
      ORDER BY u.lastname, u.firstname";

debugging('SQL Query: ' . $sql, DEBUG_DEVELOPER);
debugging('Query params: ' . print_r(['sessionid' => $pageparams->sessionid], true), DEBUG_DEVELOPER);

$att->users = $DB->get_records_sql($sql, ['sessionid' => $pageparams->sessionid]);
debugging('Number of users found: ' . count($att->users), DEBUG_DEVELOPER);
debugging('Users found: ' . print_r($att->users, true), DEBUG_DEVELOPER);

if (($formdata = data_submitted()) && confirm_sesskey()) {
    $att->take_from_form_data($formdata);

    $group = 0;
    if ($att->pageparams->grouptype != mod_attendance_structure::SESSION_COMMON) {
        $group = $att->pageparams->grouptype;
    } else {
        if ($att->pageparams->group) {
            $group = $att->pageparams->group;
        }
    }

    // Count only students assigned to this session
    $totalusers = count($att->users);
    $usersperpage = $att->pageparams->perpage;

    if (!empty($att->pageparams->page) && $att->pageparams->page && $totalusers && $usersperpage) {
        $numberofpages = ceil($totalusers / $usersperpage);
        if ($att->pageparams->page < $numberofpages) {
            $params = [
                'sessionid' => $att->pageparams->sessionid,
                'grouptype' => $att->pageparams->grouptype, ];
            $params['page'] = $att->pageparams->page + 1;
            redirect($att->url_take($params), get_string('moreattendance', 'attendance'));
        }
    }

    redirect($att->url_manage(), get_string('attendancesuccess', 'attendance'));
}

$PAGE->set_url($att->url_take((array)$pageparams));
$PAGE->set_title($course->shortname. ": ".$att->name);
$PAGE->set_heading($course->fullname);
$PAGE->set_cacheable(true);
$PAGE->navbar->add($att->name);

$output = $PAGE->get_renderer('mod_attendance');
$sesstable = new mod_attendance\output\take_data($att);

// Output starts here.

echo $output->header();

echo $output->render($sesstable);

echo $output->footer();
