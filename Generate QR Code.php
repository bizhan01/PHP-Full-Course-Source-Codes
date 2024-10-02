<?php
$data = "https://www.example.com";
$qrCode = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($data);
echo "<img src='$qrCode' alt='QR Code'>";
?>
