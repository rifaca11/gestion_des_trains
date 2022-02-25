<?php



class ProductsController
{
    public function index()
    {
        $db = new Products();
        $data['products'] = $db->GetProduct();
        view::load('products/product',$data);
    }

    public function AddProduct()
    {

        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['reference'])){
            $db = new Products();

            $add =[];
            $add["reference"]=$_POST["reference"];
            $add["nom"]=$_POST["nom"];
            $add["descriptions"]=$_POST["descriptions"];
            $add["prix"]=$_POST["prix"];
            $add["quantite"]=$_POST["quantite"];
            $add["categorie"]=$_POST["categorie"];

            $db->AddProduct($add);
            header('location:/ ');

            // $_POST['reference']="";
        }
        else
        {
            view::load('products/add');
        }
    }
        
    public function DeleteProduct($id)
    {
        $db = new Products();
        $db->DeleteProduct($id);
        $data['products'] = $db->GetProduct();
        view::load('products/product',$data);
    }


    
    public function UpdateProduct($id)

    {

        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['reference'])){
            $db = new Products();

            $update =[];
            $update["id"]=$id;
            $update["reference"]=$_POST["reference"];
            $update["nom"]=$_POST["nom"];
            $update["descriptions"]=$_POST["descriptions"];
            $update["prix"]=$_POST["prix"];
            $update["quantite"]=$_POST["quantite"];
            $update["categorie"]=$_POST["categorie"];

            $db->UpdateProduct($update);
            header('location:/products');

            // $_POST['reference']="";
        }
        else
        {
            $db = new Products();
            $data['update'] = $db->GetProductToUpdate($id);
            view::load('products/update',$data);
        }
    }

}



?>