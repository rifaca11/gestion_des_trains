<?php

class Trips extends DB
{

 public function GetTrips()
 {
    $sql = "SELECT T.idT,T.gareD,T.gareA,T.HoursD,T.HoursA,T.price,Tr.nomT,T.place,Tr.nomT,S.status FROM trips T, train Tr, states S where Tr.idTr=T.idTr and S.idS=T.idS";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute())
    {
      return $stmt->fetchAll();
    }
    else return 0; 
 }


public function GetTrain()
{
   $sql = "SELECT T.idTr from train Tr, trips T where Tr.idTr=T.idTr";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}

public function GetTrains()
{
   $sql = "SELECT idTr, nomT FROM train";
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
   $sql = "SELECT T.idT, T.gareD ,T.gareA, T.HoursD, Tr.idTr,T.HoursA, T.price, T.place,Tr.nomT, T.idS from trips T, Train Tr WHERE T.idTr=Tr.idTr AND T.place>0 AND T.idS in (select idS from states where status='valid') ";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;
}

public function GetStates()
{
   $sql = "SELECT idS,status from states";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetchAll();
   }
   else return 0;

}

public function GetGareDispo($gareD,$gareA)
{
    $sql ="SELECT T.idT, T.gareD ,T.gareA, T.HoursD, T.HoursA, T.price ,T.place,Tr.nomT ,T.idS FROM trips T, train Tr WHERE T.idTr=Tr.idTr and T.gareD='$gareD' and T.gareA='$gareA' and T.idS in (select idS from states where status='valid') ";
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
      $sql = "INSERT INTO trips (gareD, gareA, HoursD, HoursA, price,idS,idTr)
      VALUES (?,?,?,?,?,?,?)";
      // use exec() because no results are returned
      $stmt = $this->connect()->prepare($sql);
    if($stmt->execute(array($add['gareD'],$add['gareA'],$add['HoursD'],$add['HoursA'],$add['price'],$add['idS'],$add['idTr'])))
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
  $sql = "UPDATE trips SET gareD=?,gareA=?,HoursD=?, HoursA=?, price=?,idS=?,idTr=? WHERE idT=?";
    // use exec() because no results are returned
    $stmt = $this->connect()->prepare($sql);
   if($stmt->execute(array($update['gareD'],$update['gareA'],$update['HoursD'],$update['HoursA'],$update['price'],$update['idS'],$update['idTr'],$update['idT']))) 
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
   $sql = "SELECT R.idRes,R.status,R.day,P.idP,P.firstname,P.email,T.idT,T.gareD,T.gareA,T.HoursD,T.HoursA,T.price,T.place FROM reservation R,person P,trips T, train Tr WHERE P.idP=R.idP and T.idT=R.idT and T.idTr=Tr.idTr and R.idP=$id and R.status='valid' and T.place>0";
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


function getPlaces($idTr){
   $sql="SELECT nbrPlace FROM train WHERE idTr = $idTr";
   $stmt = $this->connect()->prepare($sql);
  if($stmt->execute())
   {
     return $stmt->fetch();
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

public function NbrPlace($id)
{
    $sql="UPDATE trips T,train Tr SET T.place= T.place-1 WHERE T.idTr=Tr.idTr and T.idT=$id and T.place>0";
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
   $sql = "SELECT T.HoursD,R.day from reservation R ,trips T where R.idRes=$id and T.idT=R.idT";
   $stmt = $this->connect()->prepare($sql);
   if($stmt->execute())
   {
     return $stmt->fetch();
   }
   else return 0;
  }

  // public function ReservePlaceDispo($id)
  // {
  //  $sql = "SELECT place from trips where place<0 and resr";
  //  $stmt = $this->connect()->prepare($sql);
  //  if($stmt->execute())
  //  {
  //    return $stmt->fetch();
  //  }
  //  else return 0;
  // }


  // public function getPlace()
  // { $sql = "SELECT nbrPlace from train where idTr=$id";
  //   $stmt = $this->connect()->prepare($sql);
  //   if($stmt->execute())
  //   {
  //     return $stmt->fetch();
  //   }
  //   else return 0;
  //  }


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