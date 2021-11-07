<?php 
class DB{

private $serverName;
private $userName;
private $password;
private $dbName;
private $charset;

protected function connect(){

$this->serverName="localhost";
$this->userName="root";
$this->password="";
$this->dbName="dbTest";
$this->charset="UTF8mb4";

try {
    //code...
    $dsn="mysql:host=".$this->serverName."dbName=".$this->dbName."charset=".$this->charset;

    $pdo= new PDO($dsn,$this->userName,$this->password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (\Exception $e) {
    //throw $th;
}





}



}


?>