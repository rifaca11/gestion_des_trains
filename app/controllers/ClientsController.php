<?php


session_start();
class ClientsController
{
    // public function  __construct()
    // {
    //     if(!isset($_SESSION['idPCl'])){
    //         view::loadUser('loginClient');
    //     }
    // }

    public function index()
    {
        // Check if the user is logged in, if not then redirect him to login page
                view::loadClient('compteClient');

    }

    public function Booking()
    {
        $db = new Person();
        $db->GetGareDispo($gareD,$gareA);
        view::loadClient('booking');
    }
    
    public function UpdatePerson()

    {
    
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['tele']) && !empty($_POST['city']) && !empty($_POST['dateN'])){
            $db = new Person();
            // echo $_SESSION["idPCl"];
            $update =[];
            $update["idP"]=$_SESSION["idPCl"];
            $update["firstname"]=$_POST["firstname"];
            $update["lastname"]=$_POST["lastname"];
            $_SESSION["firstnameCl"]=$update["firstname"];
            $_SESSION["lastnameCl"]=$update["lastname"]; 
            $update["email"]=$_POST["email"];
            $update["tele"]=$_POST["tele"];
            $update["city"]=$_POST["city"];
            $update["dateN"]=$_POST["dateN"];
    
            $update["password"]=trim($_POST["password"]);
         
            
            // print_r($update);
            if ($db->UpdatePerson($update)) {
                $db = new Person();
                $data['infosP'] = $db->GetPerson($_SESSION["idPCl"]);

                view::loadClient('profile',$data);
            }
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
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['day']))
        {

            $ajout =[];
            $ajout["day"]=$_POST["day"];
            $ajout["idP"]=$_SESSION["idPCl"];
            $ajout["idT"]=$id;
            // $ajout["idTr"]=$idTr;
            $data['tripsG'] = $db->GetGare();
            
            if($id != -1)
            {
                $db->AddReservation($ajout);
                // $db->GetTrain();
                $db->NbrPlace();
               
                header("location:/Clients/bookingUs");
                exit();
            } 
            view::loadClient('booking',$data);
         }

    else{
            $data['tripsG'] = $db->GetGare();
            view::loadClient('booking',$data);
        }
    } 

    public function showReserve($id=-1)
    {
        
        $db = new Trips();
        // $show['idP']=$idP;
        // $show['idRes']=$idRes;
        $data['tripsR'] = $db->GetReservation($_SESSION['idPCl']);

        if($id != -1){
        $db->AddReservation($id,$_SESSION['idPCl'],$_POST['day']);
        header("location:/Clients/showReserve");
        exit();
        }
        view::loadClient('listeReservation',$data);
    }

    public function CancelReservation($id=-1)
    {
        $db = new Trips();
        if($_SERVER['REQUEST_METHOD']=='POST')
        {

        date_default_timezone_set('africa/casablanca');
        $time_depart = $db->GetResToCancel($id);
        // print_r ($time_depart);
        // echo $time_depart['day'];
        $day_dep=$time_depart['day'].' '.$time_depart['HoursD'];
        // print_r($day_dep);
        // exit;

        date_default_timezone_set('africa/casablanca');
        $time_reserve  = new DateTime(date("H:i:s",strtotime($day_dep)));
        $now = new DateTime(date("H:i:s"));
                  // print_r($now) ;
                  // exit;


        $intvl = $time_reserve->diff($now);
        $timeLeft= $intvl->y * 365 * 24 * 60 + $intvl->m * 30 * 24 * 60 + $intvl->d * 24 * 60 + $intvl->h * 60 + $intvl->i;
       
    
        if ($timeLeft>60)
        {
            $db->Cancel($id);
        }
        header("location:/Clients/showReserve");
        exit();
        }
        else{
       $data['tripsR'] = $db->GetReservation();
        view::loadClient('booking',$data);
        }
    }

    public function searchC()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $db = new Trips();
            $gareD=$_POST['gareD'];
            $gareA=$_POST['gareA'];
            $getTrips = $db->GetGareDispo($gareD,$gareA);
            

            if($getTrips)
            {
                $data['tripsG'] = $db->GetGareDispo($gareD,$gareA);
                view::loadClient('booking',$data);
            }
            else
            {
                header("location:/Clients");
                // view::loadUser('home');
                echo'<script language="javascript">';
                echo"alert('No Results Found')";
                echo"</script>";
                
                
            }

        }
    }

   
   


    }



?>



