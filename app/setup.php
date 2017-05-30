<?php
// this file is used first time only
// get config and select array
$config = require 'config.php';
$config = $config['database'];

try {
    // define vars
    $database   = $config['name'];
    $connection = $config['connection'];
    $username   = $config['username'];
    $password   = $config['password'];
    // connect to db
    $conn = new PDO("$connection", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // create db
    $sql = "CREATE DATABASE IF NOT EXISTS $database";
    $conn->exec($sql);
    $sql = "use $database";
    $conn->exec($sql);
    // use normal connection method
    $database = require 'app.php';
    // populate and redirect
    $database->query(file_get_contents('database/seed.sql'));
    header('location:createpost.php');
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}