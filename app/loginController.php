<?php
// login
$database = require 'app.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // check if username exist
    $user = $database->query("SELECT * FROM users WHERE username = '$username'");
    if($user->rowCount() == 0) {
        $message = 'Username does not match our database.';} 
    else {
    // prepare password check
    $user = $database->query("SELECT * FROM users WHERE username = '$username'");
    $user = $user->fetch();
    // check if password is correct
    if(!password_verify($password, $user['password'])) { 
        $message = 'The password does not match';} 
    else { 
        // display message and set session
        $_SESSION['user'] = $user;
        $_SESSION['isloggedin'] = TRUE;
        header('location:createpost.php');}
    }
}