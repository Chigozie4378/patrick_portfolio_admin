<?php
class DB{
    private $host = 'localhost';
    private $server = 'root';
    private $password = '';
    private $dbname = 'portfolio';

    protected function connect(){
        $conn = new mysqli($this->host,$this->server,$this->password,$this->dbname);
        if ($conn->connect_error){
            echo "Failed".$conn->connect_error;
        }
        return $conn;
    }

}
?>