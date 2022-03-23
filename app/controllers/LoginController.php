

<?php
session_start();

class LoginController
{

 public function index()

{
     // function to login Client

        $cl = new Auth();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           if(empty($_POST["email"]) || empty($_POST["password"])){
                 echo "Enter your informations";
           }else{
            $add=$cl-> login($_POST["email"],$_POST["password"]);
           
              if($add){
               //   print_r($add);
               echo "tnks for your auth \n";
               $_SESSION["idPCl"]= $add[0]["idP"];
               $_SESSION["firstnameCl"]= $add[0]["firstname"];
               $_SESSION["lastnameCl"]= $add[0]["lastname"];
               $_SESSION["emailCl"]=$add[0]["email"];
                 header('location:/Clients');
              }else{
                 echo "your mail or password is invalid";
              }
               
           }
        }


}

public function register()

{
     // function to sign up

        $cl = new Auth();
      
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           if(empty($_POST["firstname"])||  empty($_POST["lastname"]) || empty($_POST["email"])  || empty($_POST["tele"])|| empty($_POST["city"])|| empty($_POST["dateN"])|| empty($_POST["password"]) ){
                echo "Entrer votre information";
           }else{
              $add=$cl->registre(($_POST["firstname"]),($_POST["lastname"]) , $_POST["email"] , $_POST["tele"] , $_POST["city"] , $_POST["dateN"],($_POST["password"]));
              if($add==1){
               // echo "Votre information est bien enregistrer , Bienvenue"; 
               view::loadClient('loginClient');
               // header('loaction:/home/loginC');
              }else{
               //  echo "Votre information n'est pas bien enregistrer";
               view::loadClient('signupClient');
               // header('loaction:/home/signupC');
              }
               
                
           }
        }

       
     }


 public function logout(){

         session_destroy();
         header("location:/home");
         
      }
       

public function loginAdmin()
{
    // function to login admin

    $cl = new Auth();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       if(empty($_POST["email"]) || empty($_POST["password"])){
             echo "Enter your informations";
       }else{
        $add=$cl-> loginAd($_POST["email"],$_POST["password"]);
       
          if($add){
            //  echo "tnks for your auth \n";
             $_SESSION["idPAd"]= $add[0]["idP"];
             $_SESSION["firstnameAd"]= $add[0]["firstname"];
             $_SESSION["lastnameAd"]= $add[0]["lastname"];
             $_SESSION["emailAd"]=$add[0]["email"];

             $db = new Person();
             $tab['count'] = $db->nbrCLient();
             $tab['countt'] = $db->nbrUser();
             $tab['counttt'] = $db->nbrReservation();
             $tab['countttt'] = $db->nbrTrips();
             view::load('main',$tab);

          }else{
            //  echo "your mail or password is invalid";
            view::load('login');
          }
           
       }
    }
}
 
public function logoutAd(){

   session_destroy();
   view::loadUser('loginAdmin/');
   
}
     

}
?>