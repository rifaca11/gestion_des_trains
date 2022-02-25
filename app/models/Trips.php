<?php

class Trips extends DB
{

 public function GetTrips()
 {
    $sql = "SELECT T.idT,T.gareD,T.gareA,T.dateD,T.dateA,T.price,T.states,Tr.nomT FROM trips T, train Tr where Tr.idTr=T.idTr";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetchAll();
    }
    else return 0; 


}


public function GetTrain()
{
   $sql = "SELECT idTr,nomT from train";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}


// -- VALUES ('$add['reference']','$add['nom']','$add['descriptions']','$add['prix']','$add['quantite']','$add['categorie']')";


    public function AddTrips($add)
    {
      $sql = "INSERT INTO trips (gareD, gareA, dateD, dateA, price, idTr)
      VALUES (?,?,?,?,?,?)";
      // use exec() because no results are returned
      $stmt = $this->connect()->prepare($sql);
    if($stmt->execute(array($add['gareD'],$add['gareA'],$add['dateD'],$add['dateA'],$add['price'],$add['idTr']))) 
    {
        echo "New record created successfully";
    }
    else
    {
      return 0;
    }

}




// public function DeleteTrips($id)
// {
//   // sql to delete a record
//   $sql = "DELETE FROM trips WHERE idT=$id";

//   // use exec() because no results are returned
//   if($this->connect()->exec($sql))
//   {
//     echo "Record deleted successfully";
//   }
//   else
//   {
//     return 0;
//   }
  
// }

public function UpdateTrips($update)
{
  $sql = "UPDATE trips SET gareD=?,gareA=?,dateD=?, dateA=?, price=?, idTr=? WHERE idT=?";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute(array($update['gareD'],$update['gareA'],$update['dateD'],$update['dateA'],$update['price'],$update['idTr'],$update['idT']))) 
   {
       echo "updated successfully";
   }
   else
   {
     return 0;
   }
  
  }

  public function GetTripsToUpdate($id)
  {
      $sql = "SELECT * FROM trips WHERE idT=$id";
     $stmt = $this->connect()->prepare($sql);
     if($stmt->execute())
     {
       return $stmt->fetch();
     }
     else return 0;
 }



public function GetClients()
{
   $sql = "SELECT * FROM person where role=2";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}


public function GetReservation()
{
   $sql = "SELECT R.status,P.firstname,P.email,T.gareD,T.gareA,T.dateD,T.dateA,T.price FROM reservation R,person P,trips T WHERE P.idP=R.idP and T.idT=R.idT";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}





public function CancelTrips($update)
{
  $sql = "UPDATE trips SET states = 'invalid' WHERE idT=?";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute(array($update['idT']))) 
   {
       echo "Canceled successfully";
   }
   else
   {
     return 0;
   }
  
  }

  public function GetTripsToCancel($id)
  {
      $sql = "SELECT states FROM trips WHERE states='valid' idT=$id";
     $stmt = $this->connect()->prepare($sql);
     if($stmt->execute())
     {
       return $stmt->fetch();
     }
     else return 0;
 }







}






?>