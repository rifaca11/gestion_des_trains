<?php


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
        view::loadUser('loginClient');
    }

    public function signupC()

    {
        view::loadUser('signupClient');
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