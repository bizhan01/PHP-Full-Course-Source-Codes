<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        echo "Login Successful!";
    } else {
        echo "Invalid credentials. Please try again.";
    }
}

if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'];
}
?>
