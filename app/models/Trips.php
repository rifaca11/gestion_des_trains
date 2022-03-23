<?php

class Trips extends DB
{

 public function GetTrips()
 {
    $sql = "SELECT T.idT,T.gareD,T.gareA,T.HoursD,T.HoursA,T.price,T.states,Tr.nomT FROM trips T, train Tr where Tr.idTr=T.idTr";
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

// for booking 

public function GetGare()
{
   $sql = "SELECT idT, gareD ,gareA, HoursD, HoursA, price from trips";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}

public function GetGareDispo($gareD,$gareA)
{
      $sql ="SELECT idT, gareD ,gareA, HoursD, HoursA, price FROM trips WHERE gareD='$gareD' and gareA='$gareA' ";
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
      $sql = "INSERT INTO trips (gareD, gareA, HoursD, HoursA, price, idTr)
      VALUES (?,?,?,?,?,?)";
      // use exec() because no results are returned
      $stmt = $this->connect()->prepare($sql);
    if($stmt->execute(array($add['gareD'],$add['gareA'],$add['HoursD'],$add['HoursA'],$add['price'],$add['idTr']))) 
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
  $sql = "UPDATE trips SET gareD=?,gareA=?,HoursD=?, HoursA=?, price=?, states=?, idTr=? WHERE idT=?";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute(array($update['gareD'],$update['gareA'],$update['HoursD'],$update['HoursA'],$update['price'],$update['states'],$update['idTr'],$update['idT']))) 
   {
       echo "update successfully";
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
       return $stmt->fetch(PDO::FETCH_ASSOC);
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


public function GetReservation($id)
{
   $sql = "SELECT R.idRes,R.status,R.day,P.idP,P.firstname,P.email,T.idT,T.gareD,T.gareA,T.HoursD,T.HoursA,T.price FROM reservation R,person P,trips T WHERE P.idP=R.idP and T.idT=R.idT and R.idP=$id and R.status='valid'";
   $stmt = $this->connect()->prepare($sql);
  if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}

public function GetReservationA()
{
   $sql = "SELECT R.idRes,R.status,R.day,P.idP,P.firstname,P.email,T.idT,T.gareD,T.gareA,T.HoursD,T.HoursA,T.price FROM reservation R,person P,trips T WHERE P.idP=R.idP and T.idT=R.idT";
   $stmt = $this->connect()->prepare($sql);
  if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}


public function AddReservation($ajout)
{

  $sql = "INSERT INTO reservation (idT, idP,day)
  VALUES (?,?,?)";
  // use exec() because no results are returned
  $stmt = $this->connect()->prepare($sql);
if($stmt->execute(array($ajout['idT'],$ajout['idP'],$ajout['day']))) 
{
    echo "New record created successfully";
}
else
{
  return 0;
}
}


public function AddUser($ajout)
{

  $sql = "INSERT INTO person (firstname,lastname,email,tele,role)
  VALUES (?,?,?,?,?)";
  // use exec() because no results are returned
  $stmt = $this->connect()->prepare($sql);
if($stmt->execute(array($ajout['firstname'],$ajout['lastname'],$ajout['email'],$ajout['tele'],3))) 
{
    echo "New record created successfully";
}
else
{
  return 0;
}
}


public function getLastUser()
{
  $sql = "SELECT idP FROM person ORDER BY idP desc LIMIT 0,1 ";
  $stmt = $this->connect()->prepare($sql);
  if($stmt->execute()) 
  {
        return $stmt->fetch();
  }
  else
  {
    return 0;
  }
}




public function Cancel($id)
{
  $sql = "UPDATE reservation SET status = 'invalid' WHERE idRes=$id";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
       echo "Canceled successfully";
   }
   else
   {
     return 0;
   }
}


  public function GetResToCancel($id)
{
   $sql = "SELECT create_at from reservation where idRes=$id";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetch();
   }
   else return 0;
  }


}







//   public function GetTripsToDelete($id)
//   {
//       $sql = "SELECT states FROM trips WHERE states='valid' idT=$id";
//      $stmt = $this->connect()->prepare($sql);
//      if($stmt->execute())
//      {
//        return $stmt->fetch();
//      }
//      else return 0;
//  }













?>