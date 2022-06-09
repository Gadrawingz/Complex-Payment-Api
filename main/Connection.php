<?php

class Connection {
    public    $server   = "localhost";
    protected $database = "payment_api";
    private   $user     = "root";
    private   $password = "";
    public    $con;

    public function connect(){

        try {
            $dsn= "mysql:host=$this->server; dbname=$this->database";
            $this->con = new PDO($dsn, $this->user, $this->password);
            return $this->con;

        } catch(PDOException $error) {
            echo "ERROR IN CONNECTION! ".$error->getMessage();
        }
    }
}
?> 