<?php 

class DB
{
   protected    $servername = HOST;
   protected    $username = USER;
   protected    $password = PASS;
   protected    $database = DBNAME;


     public function connect()
     {
      
      try {
        $conn = new PDO("mysql:host=localhost;dbname=gestion_trains", 'root','');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
     }
}




?>