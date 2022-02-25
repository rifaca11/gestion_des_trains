<?php



class ClientsController
{
    public function index()
    {
        view::loadClient('compteClient');
    }

    public function bookingUs()
    {
        view::loadClient('booking');
    }

   
}



?>