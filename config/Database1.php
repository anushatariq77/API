<?php
class Database {

    private $host= '192.168.8.111';
    private $db_name='khaadi';
    private $username='root';
    private $password ='';
    private $conn;

    public function connect(){
    $this->conn=null;
    try{
      $this->conn=new PDO('mysql:host='. $this->host . ';dbname=' . $this->db_name,
       $this->username, $this->password);
       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo 'Connection Error:'. $e->getMessage();
    }
    return $this->conn;
    }
    
}
?>