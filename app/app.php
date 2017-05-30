<?php
// if session is not active - start one
if(!isset($_SESSION)){
    session_start();
}
// get config info from file and make a variable
$config = require 'config.php';
// add helper files
require 'database/Connection.php';
require 'database/QueryBuilder.php';
// create a new connection using info from config
return new QueryBuilder(
    Connection::make($config['database'])
);