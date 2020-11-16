<?php


require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/insertmodel.php');


class FarmerController{
    function __construct()
    {
        $this->model = new farmerModel();
        $this->model2 = new insertmodel();

    }

    
    public function listed_items()
    {
       
        $view = new view("Farmer/listed_items");
        $result = $this->model->get_all();
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
        $view = new view("Farmer/profile");
    }

    public function insert_items(){
        if(isset($_POST['submit'])){

            $itemname = $_POST['itemname'];
            $avaiweight = $_POST['avaiweight'];
            $minweight = $_POST['minweight'];
            $price = $_POST['price'];
            $startdate = $_POST['startdate'];
            $enddate = $_POST['enddate'];
            $itemtype = $_POST['itemtype'];
            
            $itemimage = $_POST['itemimage'];

            $this->model2->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$itemimage);
            $view = new view("Farmer/insert");
        }


        
        
    }

    public function forum(){
        $view = new view("Forum/forum");
    }

    public function about(){
        $view = new view("Farmer/aboutus");
    }

//add items



}


?>