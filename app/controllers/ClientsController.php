<?php


session_start();
class ClientsController
{
    public function index()
    {
        view::loadClient('compteClient');
    }
    
    public function UpdatePerson()

    {
    
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['firstname']) && $_SESSION["idPCl"]=$id){
            $db = new Person();

            $update =[];
           
            $update["firstname"]=$_POST["firstname"];
            $update["lastname"]=$_POST["lastname"];
            $update["email"]=$_POST["email"];
            $update["tele"]=$_POST["tele"];
            $update["city"]=$_POST["city"];
            $update["dateN"]=$_POST["dateN"];
            
            // print_r($update);
            $db->UpdatePerson($update);
            view::loadClient('profile');
        }
            else
            {
                $db = new Person();
                $data['infosP'] = $db->GetPerson($_SESSION["idPCl"]);

                view::loadClient('profile',$data);
            }



    }
     
    public function bookingUs($id=-1)

    {
        
        $db = new Trips();
        $data['tripsG'] = $db->GetGare();
        if($id != -1){
        $db->AddReservation($id,$_SESSION['idPCl']);
        header("location:/Clients/bookingUs");
        exit();
        }
        view::loadClient('booking',$data);
    } 
    
    public function showReserve($id=-1)

    {
        
        $db = new Trips();
        $data['tripsR'] = $db->GetReservation();
        if($id != -1){
        $db->AddReservation($id,$_SESSION['idPCl']);
        header("location:/Clients/showReserve");
        exit();
        }
        view::loadClient('listeReservation',$data);
    }

      
    }


   




?>