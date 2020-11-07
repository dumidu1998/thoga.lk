<?php

require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../../core/View.php');


class BuyerController {
    function __construct()
    {
        $this->model = new item();
    }

    function getAll_get(){
        $result = $this->model->get_all();
        print_r($result);
        
    }
    public function index(){
        $view = new View("buyer/index");
        $result = $this->model->joinget();
        $class="org_active";
        $view->assign('data', $result);
        $view->assign('class', $class); 
        
        
    }
    public function organic(){
        $view = new View("buyer/index");
        $result = $this->model->joingetOrganic();
        $class="org_active";
        $view->assign('data', $result); 
        $view->assign('class', $class); 
        
        
    }

    public function itemLoad(){
        $view = new View("buyer/item_non_org");
        
    }
    public function book(){
        $view = new View("buyer/booksuccess");
        
    }

    public function selectDriver( ){
        $view = new View("buyer/selectDriver");
        $view->assign('data', []); 
        
    }
    public function cart(){
        session_start();
        $total=0;
        if(isset($_POST["add_to_cart"]))  
        { 
             if(isset($_SESSION["shopping_cart"]))  
             {  
                  $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                  if(!in_array($_POST["id"], $item_array_id))  
                  {  
                       $count = count($_SESSION["shopping_cart"]);  
                       $item_array = array(  
                            'item_id'               =>    $_POST["id"],  
                            'item_name'               =>     $_POST["hidden_name"],  
                            'item_price'          =>     $_POST["hidden_price"],  
                            'item_quantity'          =>     $_POST["quantity"]  
                       );  
                       $_SESSION["shopping_cart"][$count] = $item_array;  
                  }  
                  else  
                  {  
                       echo '<script>alert("Item Already Added")</script>';  
                       echo '<script>window.location="/thoga.lk/buyer/home"</script>';  
                  }  
             }  
             else  
             {  
                  $item_array = array(  
                    'item_id'               =>     $_POST["id"],  
                    'item_name'               =>     $_POST["hidden_name"],  
                    'item_price'          =>     $_POST["hidden_price"],  
                    'item_quantity'          =>     $_POST["quantity"]   
                  );  
                  $_SESSION["shopping_cart"][0] = $item_array;  
             } 
        }  
        if(isset($_POST["action"]))  
          {  
                if($_POST["action"] == "delete")  
                {  
                    foreach($_SESSION["shopping_cart"] as $keys => $values)  
                    {  
                          if($values["item_id"] == $_POST["id"])  
                          {  
                              unset($_SESSION["shopping_cart"][$keys]);  
                              echo '<script>window.location="/thoga.lk/buyer/home"</script>';  
                          }  
                    }  
                }  
          }  
         header("location:/thoga.lk/buyer/home");
         

    }

    public function checkout(){
        $view = new View("buyer/checkout");
    }
    public function summery(){
        $view = new View("buyer/summary");
    }
}


?>