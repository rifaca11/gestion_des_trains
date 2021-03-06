<?php
class Person extends DB
{

  
  public function GetPerson($id)
  {
     $sql = "SELECT * FROM person where idP=$id";
     $stmt = $this->connect()->prepare($sql);
     if($stmt->execute())
     {
       return $stmt->fetch();
     }
     else return 0; 
 
 
 }


public function UpdatePerson($update)
{
  if(empty($update['password'])){
    $sql = "UPDATE person SET firstname=?,lastname=?,email=?, tele=?, city=?, dateN=?  WHERE idP=? and role=2";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute(array($update['firstname'],$update['lastname'],$update['email'],$update['tele'],$update['city'],$update['dateN'],$update['idP']))) 
   {
       return true;
   }
   else
   {
     return false;
   }
  }else{
    $sql = "UPDATE person SET firstname=?,lastname=?,email=?, tele=?, city=?, dateN=?, password=? WHERE idP=? and role=2";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute(array($update['firstname'],$update['lastname'],$update['email'],$update['tele'],$update['city'],$update['dateN'],$update['password'],$update['idP']))) 
   {
       return true;
   }
   else
   {
     return false;
   }
  }
  
  }

  public function Contact($add)
  {
    $sql = "INSERT INTO contact (name, subject, email, tel, help)
      VALUES (?,?,?,?,?)";
      // use exec() because no results are returned
      $stmt = $this->connect()->prepare($sql);
    if($stmt->execute(array($add['name'],$add['subject'],$add['email'],$add['tel'],$add['help'])))
    {
        echo "New contact created successfully";
    }
    else
    {
      return 0;
    }
  }


  public function nbrCLient()
  {
    $sql = "SELECT count(*) FROM person where role=2";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetch();
    }
    else return 0; 
  } 

  public function nbrUser()
  {
    $sql = "SELECT count(*) FROM person where role=3";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetch();
    }
    else return 0; 
  } 

  public function nbrReservation()
  {
    $sql = "SELECT count(*) FROM reservation";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetch();
    }
    else return 0; 
  } 

  public function nbrTrips()
  {
    $sql = "SELECT count(*) FROM trips";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetch();
    }
    else return 0; 
  }

 
public function UpdateAdmin($update)
{
  if(empty($update['password'])){
    $sql = "UPDATE person SET firstname=?,lastname=?,email=?, tele=?, city=?, dateN=?  WHERE idP=? and role=1";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute(array($update['firstname'],$update['lastname'],$update['email'],$update['tele'],$update['city'],$update['dateN'],$update['idP']))) 
   {
       return true;
   }
   else
   {
     return false;
   }
  }else{
    $sql = "UPDATE person SET firstname=?,lastname=?,email=?, tele=?, city=?, dateN=?, password=? WHERE idP=? and role=1";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute(array($update['firstname'],$update['lastname'],$update['email'],$update['tele'],$update['city'],$update['dateN'],$update['password'],$update['idP']))) 
   {
       return true;
   }
   else
   {
     return false;
   }
  }
  
  
  }

  public function GetAdmin($id)
  {
     $sql = "SELECT * FROM person where idP=$id";
     $stmt = $this->connect()->prepare($sql);
     if($stmt->execute())
     {
       return $stmt->fetch();
     }
     else return 0; 
 
 
 }
 
}