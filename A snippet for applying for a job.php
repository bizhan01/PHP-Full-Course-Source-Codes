<?php
// Apply for a job
$job = new Job($_GET['job_id']);
$job->apply($user);
echo "Applied for job successfully.";
?>
