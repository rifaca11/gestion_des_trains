<?php


session_start();
class ClientsController
{
    public function index()
    {
        // Check if the user is logged in, if not then redirect him to login page
        if(isset($_SESSION["idPCl"]) || !empty($_SESSION["idPCl"])  ){
                view::loadClient('compteClient');
        }
        else{
            view::loadUser('home');
        }
    }

    public function Booking()
    {
        if(isset($_SESSION["idPCl"]) || !empty($_SESSION["idPCl"])  ){
        view::loadClient('booking');
    }
    else{
        view::loadUser('home');
    }
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
            $update["email"]=$_POST["email"];
            $update["tele"]=$_POST["tele"];
            $update["city"]=$_POST["city"];
            $update["dateN"]=$_POST["dateN"];
            $update["password"]=$_POST["password"];
            
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
        $data['tripsG'] = $db->GetGare();
        if($id != -1){
        $db->AddReservation($ajout);
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

        $datetime = $db->GetResToCancel($id);
        print_r ($datetime);

        $ex1 = explode(" ",$datetime[0]);
        $ex2 = explode(":" , $ex1[1]);
        if ((date('h') - $ex2[0]) != 1)
        {
            echo "true";
            $db->Cancel($id);
        }
        header("location:/Clients/bookingUs");
        exit();
        }
        else{
       $data['tripsR'] = $db->GetReservation();
        view::loadClient('booking',$data);
        }
    }

    public function search()
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
                view::loadClient('compteClient');

                echo'<script language="javascript">';
                echo"alert('No Results Found')";
                echo"</script>";
            }

        }
    }



    }

    // public function search()
    // {
    //     if (isset($_POST["submit"])) {

    //         $depart = $_POST["gareD"];
    //         $arrive = $_POST["gareA"];
    //         $day = $_POST["day"];

    //         $gets = new Search();
    //         $getTrips = $gets->reserv($depart,$arrive,$day);

    //         if($getTrips)
    //         {
    //             view::loadClient('search');
    //         }
    //         else
    //         {
    //             view::loadClient('booking');

    //             echo'<script language="javascript">';
    //             echo"alert('No Results Found')";
    //             echo"</script>";
    //         }

    //     }
    // }

   




?>