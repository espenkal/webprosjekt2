<?php
// connects to database or die
class Connection {
    // get contents from config and parse into function to avoid sql injection
    public static function make($config) {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'].';charset=utf8',
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}