<?php


require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/insertmodel.php');
require_once(__DIR__.'/../models/item.php');


class FarmerController{
    function __construct()
    {
        $this->model = new farmerModel();
        $this->model2 = new insertmodel();
        $this->itemModel = new item();

    }

    
    public function listed_items()
    {
       
        $view = new view("Farmer/listed_items");
        $result = $this->model->get_info();
        $view ->assign('data',$result);

       
         
        
    }

    public function upcoming()
    {
        $view = new View("Farmer/upcoming");
        $result = $this->model->get_details();
        $view ->assign('data',$result);
             
        
    }
   
    //upcoming

    
    public function add_item()
    {
        $view = new view("Farmer/add_item");
        $result = $this->model->get_records();
        $view->assign('records',$result);
        
        
    }
    public function view_price(){
        $view = new view("Farmer/price");
    }

    public function profile(){
        session_start();
        $farmeruserid=$_SESSION['user'][0]['user_id'];
        $farmerid=$this->model2->read_id($farmeruserid);

        $result = $this->model->get_profiledetails($farmerid[0]['farmer_id']);
        $view = new View("Farmer/profile");
        $view->assign('all',$result);

    }

    public function insert_mess(){
        $view = new view("Farmer/insert");
    }

    public function insert_items(){
        session_start();

        foreach($_SESSION['user'] as $keys => $values){
            $id = $values['user_id'] ;
            $res = $this->model2->read_id($id);
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
            
           


            // $this->model2->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$ides);
            
            $this->model2->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$ides,$f_id);
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

}


?>