<?php

class Auth extends DB
{
     //  function to login of Client
    public function login($email,$password)
    {
    $sql=("SELECT idP,firstname,lastname,email,password FROM `person` where email like '$email' and password like '$password' and role like 2 ");
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetchAll();
    }
    else
    {
      return 0;
    }
  }




    //  function to sign up of Client
    public function registre($firstname,$lastname,$email,$tele,$city,$dateN,$password){
    
        $sql=("INSERT INTO `person`( `firstname`, `lastname`, `email`, `tele`, `city`, `dateN`, `password`, `role`) VALUES ('$firstname','$lastname','$email','$tele','$city','$dateN','$password',2) ");
        $stmt = $this->connect()->prepare($sql);
        if($stmt->execute())
        {
          return 1;
        }
        else
        {
          return 0;
        } 
      }


   //  function to login of admin
    public function loginAd($email,$password)
    {
    $sql=("SELECT * FROM `person` where email like '$email' and password like '$password' and role like 1 ");
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetchAll();
    }
    else
    {
      return 0;
    }
  }







}   

