<!DOCTYPE html>
<html>
<body>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Add your authentication logic here
    if ($username === 'admin' && $password === 'password') {
        echo "Login Successful!";
    } else {
        echo "Login Failed. Please try again.";
    }
}
?>
</body>
</html>
