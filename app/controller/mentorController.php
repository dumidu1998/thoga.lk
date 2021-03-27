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
        session_start();
        $mentoruserid=$_SESSION['user'][0]['user_id'];
        $mentorid = $this->model->get($mentoruserid);
      //  print_r($mentoruserid);
      //  print_r($mentorid);
        $result = $this->model2->get_records();
        $result3 = $this->model-> join_get($mentorid[0]['mentor_id']);
        
        $view = new view("mentor/add_item(mentor)");
        $view->assign('records',$result);
        $view->assign('farmers',$result3);
        
       
    }
    

    public function insert_items(){

        session_start();

        foreach($_SESSION['user'] as $keys => $values){
            $id = $values['user_id'] ;
            $res = $this->model->read_id($id);
            print_r($res);
            foreach($res as $k => $v){
                   $m_id =  $v['mentor_id'];
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
            $farmername = $_POST['farmername'];
            $ides = $_POST['ides'];

            $this->model->insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$farmername,$ides,$m_id);
            header("location: /thoga.lk/mentor/insert_sucess");
        }

        
        
    }

    public function insert_success(){  // not used
        $view = new view("mentor/insert");
    }


    public function upcoming()
    {
        $view = new View("mentor/mentor_upcoming");
        $result = $this->model2->get_details();
        $view ->assign('data',$result);
        

       
         
        
    }

    public function listed_items()
    {
       
        $view = new view("mentor/listed_item(mentor)");
        $result = $this->model->get_info();
        $view ->assign('data',$result);

       
         
        
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