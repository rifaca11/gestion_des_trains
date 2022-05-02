<?php


session_start();
class AdminController
{

    public function index()

    {
        view::load('login');

    }
    

    public function add()

    {
        if(isset($_SESSION["idPAd"]) || !empty($_SESSION["idPAd"]))
        {
        $db = new Trips();
        // die($id);
        $data['trips'] = $db->GetTrips();
        $data['train'] = $db->GetTrains();
        $data['states'] = $db->Getstates();

        // print_r($data['trips']);

        view::load('create',$data);
        }
    else
        {
        view::load('login');
        }
       
    }


    public function showdashboard()
    {
        if(isset($_SESSION["idPAd"]) || !empty($_SESSION["idPAd"]))
        {
            $db = new Person();
            $tab['count'] = $db->nbrCLient();
            $tab['countt'] = $db->nbrUser();
            $tab['counttt'] = $db->nbrReservation();
            $tab['countttt'] = $db->nbrTrips();
            view::load('main',$tab);
        }
    else
        {
        view::load('login');
        }
    }

    // public function DeleteTrips($id)
    // {
    //     $db = new Trips();
    //     $db->DeleteTrips($id);
    //     header('location:/admin/add');
    // }

    public function AddTrips()
    {

        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['gareD'])){
            $db = new Trips();

            $add =[];
            $add["gareD"]=$_POST["gareD"];
            $add["gareA"]=$_POST["gareA"];
            $add["HoursD"]=$_POST["HoursD"];
            $add["HoursA"]=$_POST["HoursA"];
            $add["price"]=$_POST["price"];
            $add["idTr"]=$_POST["idTr"];
            $add["idS"]=$_POST["idS"];

            //  var_dump($add);
            $db->AddTrips($add);
            header('location:/admin/add');

            
        }
        else
        {
            view::load('/admin/add');
        }
    }

    public function UpdateTrips($id)

    {

        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['gareD'])){
            $db = new Trips();

            $update =[];
            $update["idT"]=$id;
            $update["gareD"]=$_POST["gareD"];
            $update["gareA"]=$_POST["gareA"];
            $update["HoursD"]=$_POST["HoursD"];
            $update["HoursA"]=$_POST["HoursA"];
            $update["price"]=$_POST["price"];
            $update["idS"]=$_POST["idS"];
            $update["idTr"]=$_POST["idTr"];
         
            $db->UpdateTrips($update);
            header('location:/admin/add');
        }
        else
        {
            $db = new Trips();
            $data['states'] = $db->GetTripsToUpdate($id);
            $data['train'] = $db->GetTrains($id);
            view::load('/admin/add',$data);
        }
    }

// public function DeleteTrips($id)
//     {
//         $db = new Trips();
//         $db->DeleteTrips($id);
//         header('location:/admin/add');
//     }


    // public function CancelTrips($id)

    // {

    //     if($_SERVER['REQUEST_METHOD']=='POST'){
    //         $db = new Trips();
    //         $update =[];
    //         $update["idT"]=$id;
    //         // print_r($update);
    //         $db->CancelTrips($update);
    //         header('location:/admin/add');

    //     }
    //     else
    //     {
    //         $db = new Trips();
            
    //         $data['update'] = $db->GetTrips($id);
    //         view::load('/admin/add',$data);
    //     }
    // }



    public function history()

    { 
        if(isset($_SESSION["idPAd"]) || !empty($_SESSION["idPAd"]))
        {
            $db = new Trips();
            $data['reservation'] = $db->GetReservationA();
            view::load('historyReserve',$data);
        }
    else
        {
        view::load('login');
        }
        
    }

    public function showClients()

    {
        if(isset($_SESSION["idPAd"]) || !empty($_SESSION["idPAd"]))
        {
            
            $db = new Trips();
            $data['person'] = $db->GetClients();
            view::load('infosClient',$data);
        }
    else
        {
        view::load('login');
        }
        
    }

    
    public function profil()

    {
        if(isset($_SESSION["idPAd"]) || !empty($_SESSION["idPAd"]))
        {
            view::load('adminProfile');
        }
    else
        {
        view::load('login');
        }
       
    }

    public function UpdateAdmin()

    {
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['tele']) && !empty($_POST['city']) && !empty($_POST['dateN'])){
            $db = new Person();
            // echo $_SESSION["idPAd"];
            $update =[];
            $update["idP"]=$_SESSION["idPAd"];
            $update["firstname"]=$_POST["firstname"];
            $update["lastname"]=$_POST["lastname"];
            $update["email"]=$_POST["email"];
            $update["tele"]=$_POST["tele"];
            $update["city"]=$_POST["city"];
            $update["dateN"]=$_POST["dateN"];
            $update["password"]=$_POST["password"];
            
            // print_r($update);
            if ($db->UpdateAdmin($update)) {
                $db = new Person();
                $data['infosA'] = $db->GetAdmin($_SESSION["idPAd"]);

                view::load('adminProfile',$data);
            }
            
        }
            else
            {
                $db = new Person();
                $data['infosA'] = $db->GetAdmin($_SESSION["idPAd"]);
                view::load('adminProfile',$data);
            }



    }


}