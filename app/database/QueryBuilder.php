<?php

class QueryBuilder {
    protected $pdo;
    // construct a pdo
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    // select all from selected table
    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    // select for specified and deliver as class
    public function select($table) {
        $statement = $this->pdo->prepare($table);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    // 
    public function query($sql){
        $query = $this->pdo->prepare($sql);
        $query->execute();        
        return $query;
    }
    public function fetch($id) {
        return $this->query("SELECT * FROM posts WHERE id = {$id}")->fetch();
    }
    // prepared statement for post
    public function post($title, $ingress, $body, $imgsrc){
        $statement = $this->pdo->prepare("INSERT INTO posts(title, ingress, body, imgsrc) VALUES(:title, :ingress, :body, :imgsrc)");
        $statement->bindParam(':title', $title);
        $statement->bindParam(':ingress', $ingress);
        $statement->bindParam(':body', $body);
        $statement->bindParam(':imgsrc', $imgsrc);
        $statement->execute();
    }
}