<?php
// Enroll in a course
$course = new Course($_GET['course_id']);
$course->enroll($user);
echo "Enrolled in course successfully.";
?>
