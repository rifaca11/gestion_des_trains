<?php


session_start();

class HomeController
{

    public function index()

    {
        view::loadUser('home');
    }

    

    public function aboutUs()

    {
        view::loadUser('about');
    }

    
    public function contactUs()

    {
        view::loadUser('contact');
    }

    public function loginC()

    {
        view::loadClient('loginClient');
    }

    public function loginAdmin()

    {
        view::load('login');
    }

    public function signupC()

    {
        view::loadClient('signupClient');
    }

    public function booking($id=-1)
    {
        

    {
        $db = new Trips();
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['tele'] && !empty($_POST['day'])))
        {

        $ajout =[];
        $ajout["firstname"]=$_POST["firstname"];
        $ajout["lastname"]=$_POST["lastname"];
        $ajout["email"]=$_POST["email"];
        $ajout["tele"]=$_POST["tele"];
        $ajout["day"]=$_POST["day"];
        $ajout["idT"]=$id;
    
        $data['tripsG'] = $db->GetGare();
        if($id != -1){
        $db->AddUser($ajout);
        $idP=$db->getLastUser();
        echo $idP[0];
        $ajout['idP']=$idP[0];
        
        $db->AddReservation($ajout);
        header("location:/home/booking");
        exit();
        } 
        view::loadUser('bookingUser',$data);
    }

else{
        $data['tripsG'] = $db->GetGare();
        view::loadUser('bookingUser',$data);
}
    }
    }



   

    // public function index($id)
    // {
    //     $data['title'] = "home page";
    //     $data['content'] = "content page";
    //     view::load('home',$data);
        // echo $id;
        // echo "this class is :" . __CLASS__ ."and method is :". __METHOD__;
        // require_once(VIEWS.'home.php');

    // }
}






?>