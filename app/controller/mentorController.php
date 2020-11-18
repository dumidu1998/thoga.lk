<?php

require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/insertMentor.php');
require_once(__DIR__.'/../models/farmerModel.php');

class mentorController{
    function __construct(){

        $this->model=new insertMentor();
        $this->model2=new farmerModel();
    }

    public function add_item()
    {
        $view = new view("mentor/add_item(mentor)");
        $result = $this->model2->get_records();
        $view->assign('records',$result);

        
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
            $farmername = $_POST['farmername'];
            $itemimage = $_POST['itemimage'];

            $this->model->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$farmername,$itemimage);
        }

        
        
    }


    public function upcoming()
    {
        $view = new View("mentor/mentor_upcoming");
       /* $result = $this->model2->get_details();
        $view ->assign('data',$result);*/
        

       
         
        
    }

    public function listed_items()
    {
       
        $view = new view("mentor/listed_item(mentor)");
        /*$result = $this->model->get_all();
        $view ->assign('data',$result);*/

       
         
        
    }

    public function view_price(){
        $view = new view("mentor/mentor_price");
    }
    public function about(){
        $view = new view("mentor/aboutus");
    }
    public function profile(){
        $view = new view("mentor/profile");
    }

    public function forum(){
        $view = new view("mentor/forum");
    }
    public function view_more(){
        
        $view = new View("mentor/view_more");
    }
    public function edit(){
        
        $view = new View("mentor/edit");
    }
}


?>