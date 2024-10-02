<?php
// Check availability and book appointment
if ($calendar->isAvailable($date)) {
    $calendar->bookAppointment($user, $date);
    echo "Appointment booked successfully.";
} else {
    echo "Slot not available.";
}
?>
