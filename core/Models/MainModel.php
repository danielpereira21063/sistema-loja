<?php
require_once('Database.php');

class MainModel extends Database {
    public function signup($data) {
        extract($data);
        //criar funcão para fazer o bind
        $this->query("INSERT INTO users (name, email, password) values ('$txtName', '$txtEmail', '$txtPassword')");
        if($this->execute() ? true : false);
    }
}