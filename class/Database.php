<?php


class Database {
    private $host = 'localhost';
    private $name = 'hospital';
    private $user = 'root';
    private $password = '';

    public function __construct() {
        mysqli_connect($this->host, $this->user, $this->password) or die("Invalid host  or user details");
        mysqli_select_db($this->name) or die("Unable to select database");
    }

    public function readQuery($query) {

        $result = mysqli_query($query) or die(mysqli_error());
        return $result;
    }

}