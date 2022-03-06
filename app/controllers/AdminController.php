<?php


session_start();
class AdminController
{

    public function index()

    {
        view::load('main');
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
            $add["dateD"]=$_POST["dateD"];
            $add["dateA"]=$_POST["dateA"];
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
            $update["dateD"]=$_POST["dateD"];
            $update["dateA"]=$_POST["dateA"];
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

// public function CancelTrips($id)
//     {
//         $db = new Trips();
//         $db->CancelTrips($id);
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

    //         // $_POST['reference']="";
    //     }
    //     else
    //     {
    //         $db = new Trips();
    //         // $data['update'] = $db->GetTripsToCancel($id);
    //         // $data['update'] = $db->GetTrain($id);
    //         // view::load('/admin/add',$data);
    //     }
    // }



    public function history()

    { 
        $db = new Trips();
        $data['reservation'] = $db->GetReservation();
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
    public function logout()

    {
        view::load('login');
    }


}