<?php
// Create and assign tasks
$task = new Task($_POST['title'], $_POST['description']);
$task->assignTo($user);
echo "Task created and assigned.";
?>
