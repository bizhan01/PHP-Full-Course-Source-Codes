<?php
// Add a new lead
$lead = new Lead($_POST['name'], $_POST['email']);
$crm->addLead($lead);
echo "Lead added successfully.";
?>
