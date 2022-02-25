<?php 

class view
{
    public static function load($view_name,$view_data=[])
    {
        $file = VIEWS.$view_name.'.php';
        if(file_exists($file))
        {
            extract($view_data);
            if($view_name == 'login')
            
            {
                require (VIEWS.'login.php');
            }
        else
        
        {
            //variable=value
            extract($view_data);
            require (VIEWS.'inc/header.php');
            require($file);
            require (VIEWS.'inc/footer.php');
        }
    }
        else 
        {
            echo "this view :".$view_name . "does not exist";
        }
    }



    public function loadUser($view_name,$view_data=[]){
        $file=VIEWS.'clients/'.$view_name.'.php';
        if(file_exists($file)){
            extract($view_data);
            ob_flush();
            require (VIEWS.'clients/incSiteUser/header.php');
            require ($file);
            require (VIEWS.'clients/incSiteUser/footer.php');
            ob_end_flush();
        }else{
            echo "does view ".$view_name." not exist";
        }
    }


    public function loadClient($view_name,$view_data=[]){
        $file=VIEWS.'clients/'.$view_name.'.php';
        if(file_exists($file)){
            extract($view_data);
            ob_flush();
            require (VIEWS.'clients/incSiteClient/header.php');
            require ($file);
            require (VIEWS.'clients/incSiteClient/footer.php');
            ob_end_flush();
        }else{
            echo "does view ".$view_name." not exist";
        }
    }

    
}


?>