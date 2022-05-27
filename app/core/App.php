<?php

// front end controller


class App
{
    //controller
    protected $controller = "HomeController";
    //method
    protected $action = "index";

    protected $params = [];


//prepare url 

    public function __construct()
    {
       $this->preapareURL();
       $this-> render();

    }
// extract controller , method (action) and parameters 
// @return void
       private function preapareURL()
       {
        $url = $_SERVER['QUERY_STRING'];
        //check url 
        if(!empty($url))
        {
                  $url = trim($url,"/");
                  $url = explode("/",$url);

                   //define the controller
                    $this->controller = isset($url[0]) ? ucwords($url[0])."Controller":"HomeController";
                    // echo $this->controller.'<br>';

                    //define action (method)
                    $this->action = isset($url[1]) ?$url[1] : "index";
                    // echo $this->action.'<br>';

                    
                    //define parameters
                    unset($url[0],$url[1]);
                    $this->params = !empty($url) ? array_values($url):[];
                    // var_dump($this->params);

        }
        
      
       }




       private function render(){

        if(class_exists($this->controller)){
          $controller = new $this->controller;

          if(method_exists($this->controller,$this->action)){
              call_user_func_array([$controller,$this->action],$this->params);
          }else{
              echo 'this action '.$this->action.' not exist';
          }
        }
        else{
           echo 'this class '.$this->controller.' not exist';
        }

    }

   




    }

