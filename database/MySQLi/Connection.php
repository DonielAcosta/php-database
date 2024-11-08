<?php
namespace Database\MySQLi;
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

        //forma orientada a objetos
        $mysqli = new \mysqli($server, $username, $password, $database);

        if ($mysqli->connect_error) {
            die("Connection failed: ". $mysqli->connect_error);
        }
        //uso de caracteres
        $setnames= $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        // var_dump($setnames);
        $this->conn = $mysqli;
    }
}

?>
