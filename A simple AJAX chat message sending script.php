<?php
// Handle chat message sending
$message = $_POST['message'];
$chat->sendMessage($user, $message);
echo "Message sent!";
?>
