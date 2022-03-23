<?php


session_start();
class AdminController
{

    public function index()

    {
        $db = new Person();
        $tab['count'] = $db->nbrCLient();
        $tab['countt'] = $db->nbrUser();
        $tab['counttt'] = $db->nbrReservation();
        $tab['countttt'] = $db->nbrTrips();
        view::load('main',$tab);

    }
    

    public function add()

    {
        $db = new Trips();
        $data['trips'] = $db->GetTrips();
        $data['train'] = $db->GetTrain();

        // print_r($data['trips']);

        view::load('create',$data);
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
            $update["states"]=$_POST["states"];
            $update["idTr"]=$_POST["idTr"];
            // print_r($update);
            $db->UpdateTrips($update);
            header('location:/admin/add');
        }
        else
        {
            $db = new Trips();
            $data['update'] = $db->GetTripsToUpdate($id);
            $data['update'] = $db->GetTrain($id);
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
        $db = new Trips();
        $data['reservation'] = $db->GetReservationA();
        view::load('historyReserve',$data);
    }

    public function showClients()

    {
        $db = new Trips();
        $data['person'] = $db->GetClients();
        view::load('infosClient',$data);
    }

    
    public function profil()

    {
        view::load('adminProfile');
    }

    public function showClient()
    {
        
    }


}