<?php

namespace Inc;

class koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=db_warung", "root", "");
    }
}

$conn = mysqli_connect("localhost","root","","db_warung") or die(mysqli_connect_error());

?>