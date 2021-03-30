<?php


require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../models/userModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/insertmodel.php');
require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../models/insertMentor.php');
require_once(__DIR__.'/../models/orderModel.php');



class FarmerController{
    function __construct()
    {
        $this->fmodel = new farmerModel();
        $this->itemModel = new item();
        $this->model3 = new insertMentor();
        $this->itemModel = new item();
        $this->userModel = new userModel();
        $this->oModel = new orderModel();



    }

    
    public function listed_items()
    {
       
        $view = new view("Farmer/listed_items");
        $result = $this->fmodel->get_info();
        $view ->assign('data',$result);

       
         
        
    }

    public function upcoming()
    {
        $view = new View("Farmer/upcoming");
        $result = $this->fmodel->get_details();
        $view ->assign('data',$result);
             
        
    }

    
   
    //upcoming

    
    public function add_item()
    {
        $view = new view("Farmer/add_item");
        $result = $this->fmodel->get_records();
        $view->assign('records',$result);
        
        
    }
    public function view_price(){
        $view = new view("Farmer/price");
    }

    public function profile(){
        session_start();
        $farmeruserid=$_SESSION['user'][0]['user_id'];
        //echo $farmeruserid;
  
        $farmerid=$this->fmodel->read_id($farmeruserid);
        // print_r ($farmerid[0]['mentor_id']);
        $mentorid=$farmerid[0]['mentor_id'];
        // print_r($farmerid[0]['farmer_id']);
        $result = $this->fmodel-> getfarmerallbyid($farmerid[0]['farmer_id']);

        $result2 = $this->oModel->getOrderHistory($farmerid[0]['farmer_id']);
       // print_r($result2);
        $view = new View("Farmer/farmer_profile");
        if((int)$mentorid>0){
            // echo  $mentorid;
            $mentordetails=$this->model3->getMentor_details($mentorid);
            // print_r($mentordetails);
            $view->assign('mentor',$mentordetails[0]);
        }
        $view->assign('all',$result[0]);
        $view->assign('fid',$farmerid[0]['farmer_id']);
       $view->assign('data',$result2[0]);

    }

    

    public function editprofile(){
        print_r($_GET);
        

        $out= $this->fmodel->updatedetails($_GET);
        if($out){
            header("location:/thoga.lk/farmer/profile?error=0");
        }else{
            header("location:/thoga.lk/farmer/profile?error=1");
        }
    }  

    public function insert_mess(){
        $view = new view("Farmer/insert");
    }

    public function insert_items(){
        session_start();

        foreach($_SESSION['user'] as $keys => $values){
            $id = $values['user_id'] ;
            $res = $this->fmodel->read_id($id);
            print_r($res);
            foreach($res as $k => $v){
                   $f_id =  $v['farmer_id'];
            }
        }
        if(isset($_POST['submit'])){

            $itemname = $_POST['itemname'];
            $avaiweight = $_POST['avaiweight'];
            $minweight = $_POST['minweight'];
            $price = $_POST['price'];
            $startdate = $_POST['startdate'];
            $enddate = $_POST['enddate'];
            $itemtype = $_POST['itemtype'];
            $ides = $_POST['ides'];
            
           


            // $this->itemModel->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$ides);
            
            $this->itemModel->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$ides,$f_id);
            // header("location: /thoga.lk/Farmer/insert");
            header("location: /thoga.lk/farmer/insert");
        }
    }


    public function forum(){
        $view = new view("Farmer/forum");
    }

    public function about(){
        $view = new view("Farmer/aboutus");
    }

    public function view_more(){
        
        $view = new View("Farmer/view_more");
    }

    public function edit(){
        $itemid=$_GET['id'];
        echo $itemid;
        $result=$this->itemModel->edit_item($itemid);
        $view = new View("Farmer/edit");
        $view->assign("data",$result);
    }

    public function edit_item(){
        $availweight=$_GET['availweight'];
        $minweight=$_GET['minweight'];
        $price=$_GET['price'];
        $startdate=$_GET['startdate'];
        $enddate=$_GET['enddate'];
        $itemdes=$_GET['ides'];
        $itemid= $_GET['itemid'];
        $result=$this->itemModel->submit_edit($availweight, $minweight,  $startdate, $enddate, $price, $itemdes, $itemid);
        header("location: /thoga.lk/farmer/insert");


    }


    public function delete_item(){
       
        $itemid= $_GET['id'];
        echo "dddd"; 
        $result = $this->itemModel->delete_item($itemid);
        header("location: /thoga.lk/farmer/listed");


    }


    public function viewmore(){
        if(isset($_POST['viewmore'])){
            $order_id=$_POST['order_id'];
            $res = $this->oModel->order_drivername($order_id);
            $buyer = $this->oModel->order_buyername($order_id);
            $items = $this->oModel->orderdetails_total($order_id);
            $city= $this->oModel->order_city($order_id);
        }

        $result = $this->omodel->get_order_details($order_id);
        $view = new View("farmer/farmer_viewmore");
        $view->assign('order_id',$order_id);
        $view->assign('view',$result);
        $view->assign('res',$res);
        $view->assign('buyer',$buyer);
        $view->assign('cityy',$city);
        $view->assign('items',$items);
    }

}


?>