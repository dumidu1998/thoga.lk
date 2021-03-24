<?php

require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/forumModel.php');
require_once(__DIR__.'/../models/orderModel.php');
require_once(__DIR__.'/../models/driverModel.php');


class BuyerController {
    function __construct()
    {
        $this->model = new item();
        $this->forum = new forumModel();
        $this->order = new orderModel();
        $this->drivers = new driverModel();
    }

    function getAll_get(){
        $result = $this->model->get_all();
        print_r($result);
        
    }
    public function index(){
         session_start();
        $view = new View("buyer/index");

        if(isset($_SESSION['user'])){
            foreach ($_SESSION['user'] as $keys=>$values){
                $home = $values['d_name'];
                $near1 = $values['n1'];
                $near2 = $values['n2'];

                $result_home = $this->model->joinget_home($home);
                $result_city1 = $this->model->joinget_home($near1);
                $result_city2 = $this->model->joinget_home($near2);

                $view->assign('data_home', $result_home);
                $view->assign('data_city1', $result_city1);
                $view->assign('data_city2', $result_city2);
                $result = $this->model->joinget();
                $view->assign('data', $result);
              }

        }else{
            $result = $this->model->joinget();
            $view->assign('data', $result);
            
        }

        $class="org_active";
        $view->assign('data', $result);

        $view->assign('class', $class); 
        
        
    }
    public function organic(){
        session_start();

        $view = new View("buyer/index");

        if(isset($_SESSION['user'])){
            foreach ($_SESSION['user'] as $keys=>$values){
                $home = $values['d_name'];
                $near1 = $values['n1'];
                $near2 = $values['n2'];

                $result_home = $this->model->joingetOrganic($home);
                $result_city1 = $this->model->joingetOrganic($near1);
                $result_city2 = $this->model->joingetOrganic($near2);

                $view->assign('data_home', $result_home);
                $view->assign('data_city1', $result_city1);
                $view->assign('data_city2', $result_city2);
                $result = $this->model->joinget_all_org();
                $view->assign('data', $result);
              }

        }else{
            $result = $this->model->joinget();
            $view->assign('data', $result);
            
        }
        
        $class="org_active";
        $view->assign('data', $result); 
        $view->assign('class', $class); 
        
        
    }

    public function itemLoad(){
        $view = new View("buyer/item_non_org");
        
    }
    public function book(){
        session_start();

        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                    {  
                       
                    unset($_SESSION["shopping_cart"][$keys]);  
                          
                    }  
        $view = new View("buyer/booksuccess");
        

        
    }

    public function selectDriver( ){
        session_start();
        $_SESSION['user'];
        $tot_weight=0;
        foreach($_SESSION['shopping_cart'] as $key => $values){
            $tot_weight = $tot_weight + $values['item_quantity'];
        }

        $date=$_SESSION['pickup_date'];
    
        $weight = $tot_weight;
        $user_location=$_SESSION['user'][0]['d_name'];
        $result = $this->drivers->get_avail($date, $weight,$user_location);
        $view = new View("buyer/selectDriver");
        $view->assign('data', $result); 
        $view->assign('tot_weight', $tot_weight); 
        
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
                            'item_quantity'          =>     $_POST["quantity"],
                            'item_end_d'  => $_POST['e_date'], 
                            'disctrict' => $_POST['distric'],
                       );  
                       $dates = array(
                        
                        'item_end_d'  => $_POST['e_date'],
                        'item_id'               =>     $_POST["id"],
                       );
                       $_SESSION["e_dateArray"][$count] = $dates; 

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
                    'item_quantity'          =>     $_POST["quantity"],
                    'item_end_d'  => $_POST['e_date'], 
                    'disctrict' => $_POST['distric'],
                  );  
                  $dates = array(
                    
                    'item_end_d'  => $_POST['e_date'], 
                    'item_id'               =>     $_POST["id"],
                  );
                  $_SESSION["shopping_cart"][0] = $item_array;  
                  $_SESSION["e_dateArray"][0] = $dates;  

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
                    foreach($_SESSION['e_dateArray'] as $key => $value){
                        if($value["item_id"] == $_POST["id"]){
                            
                            unset($_SESSION["e_dateArray"][$key]); 
                        }
                    }
                }  
          }  
          sort($_SESSION['e_dateArray']);
         header("location:/thoga.lk/buyer/home");
         

    }

    public function checkout(){
        
        if(isset($_POST['checkout'])){
            $pick_date =   $_POST['pick_date'];
            $view = new View("buyer/checkout");
            $view->assign('pick_date', $pick_date);
            session_start();
            $_SESSION['pickup_date'] = $pick_date;

        }
    }
    public function summery(){
        session_start();

        $view = new View("buyer/summary");
    }
    public function logout(){
        session_start();
        session_destroy();
        $View = new View("login/login");
        
        
    }
    public function profile(){
        session_start();

        $view = new View("buyer/Buyer_user_profile");
    }

    public function forum(){
        session_start();
        $view = new View("buyer/forum");
    }
    public function orders(){
        session_start();
        $view = new View("buyer/orders");
    }
    public function viewmore(){
        session_start();
        $view = new View("buyer/view_more");
        $details = $this->order->viewmore_farmer(1);
        $driver_details = $this->order->viewmore_driver(1);
        $view->assign('details', $details);
        $view->assign('driver_details', $driver_details);


    }
    public function aboutus(){
        session_start();
        $view = new View("buyer/aboutus");
    }

    public function postForum(){
        session_start();

        if(isset($_POST['post_forum'])){
            $title= $_POST['topic'];
            $description = $_POST['description'];
        
            foreach($_SESSION['user'] as $keys => $values){
            
            $forum_array = array('post' => $title , 'description' => $description, 'category' => $values['user_type']);
            }
            $result = $this->forum->insertForum($forum_array);

            header("location: forum");

            
        }
    } 
    public function summary(){
        if(isset($_POST['continue'])){
            $address_line1 = $_POST['address_line1'];
            $address_line2 = $_POST['address_line2'];
            $d_name = $_POST['d_name'];
            $c_name = $_POST['c_name'];
            $p_name = $_POST['p_name'];
            $contactno1 = $_POST['contactno1'];
            $contactno2 = $_POST['contactno2'];

            $arr = ["add1" => $address_line1, "add2" => $address_line2, "district"=>$d_name,"city"=>$c_name,"province"=> $p_name,"contact1"=>$contactno1,"contact2"=>$contactno2];
            
           
            //print_r( $_SESSION['del']);
                   
            // header("location:/thoga.lk/buyer/home");
            session_start();
            $_SESSION['delivery_add']=$arr;

            $view = new View("buyer/summary");
            $view->assign('address', $arr);
       

        }else if(isset($_POST['selectDriver'])){

            $address_line1 = $_POST['address_line1'];
            $address_line2 = $_POST['address_line2'];
            $d_name = $_POST['d_name'];
            $c_name = $_POST['c_name'];
            $p_name = $_POST['p_name'];
            $contactno1 = $_POST['contactno1'];
            $contactno2 = $_POST['contactno2'];

            // print_r($_SESSION['del_address']);
            $arr = ["add1" => $address_line1, "add2" => $address_line2, "district"=>$d_name,"city"=>$c_name,"province"=> $p_name,"contact1"=>$contactno1,"contact2"=>$contactno2];
  // header("location:/thoga.lk/buyer/summery");
                session_start();
                $_SESSION['delivery_add']=$arr;

                
            header("location:/thoga.lk/buyer/select-driver");
        }
        
    }
    public function statusUpdate(){
        $id = $_POST['ord_id'];

        $result = $this->order->setstaus($id);

        echo $result;
    }

    

}


?>