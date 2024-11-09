<?php
namespace Database\PDO;
class Connection{
    private static $instance;
    private $conn;

    private function __construct(){
        $this->make_connection();
    }
    public static function getInstance(){
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getDatabaseinstance(){
        return $this->conn;
    }
    private function make_connection(){
        $server ="localhost";
        $database="finanzas_personales";
        $username="root";
        $password ="Donielacosta1995@";
        
        
        $conecction = new \PDO("mysql:host=$server;dbname=$database",$username,$password);
        //uso de caracteres
        $setnames= $conecction->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        // var_dump($setnames);
        $this->conn = $conecction;
    }
}

?>
