<?php

class Model
{
    public PDO $connect;
    private string $user = "root";
    private string $pass = "";
    private string $host = "localhost";
    private string $dbName = "images";

    public function __construct()
    {
        try
        {
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->user, $this->pass);
            $this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//            echo "created";
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
//        $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->user, $this->pass);
    }
}
