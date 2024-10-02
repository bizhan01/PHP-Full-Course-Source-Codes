<!DOCTYPE html>
<html>
<body>
<form method="POST">
    Enter your name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello, $name!";
}
?>
</body>
</html>
