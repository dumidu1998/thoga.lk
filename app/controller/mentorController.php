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

        session_start();
        $mentoruserid=$_SESSION['user'][0]['user_id'];
        $mentorid = $this->model->get($mentoruserid);

        $result1=$this->model->view_farmers($mentorid[0]['mentor_id']);
       // print_r($result);
        $view = new View("mentor/mentor_upcoming");
        $result = $this->model2->get_details();
        $view ->assign('data',$result);
        $view->assign('data1',$result1);
        

       
         
        
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
  public function public_profile(){
        $farmerid=$_GET['id'];
       

        $result=$this->model->view_public_profile($farmerid);
        //print_r($result);
        $view = new view("mentor/public_profile");
        $view->assign('data',$result);
    }

    public function forum(){
        $view = new view("mentor/forum");
    }
    public function view_more(){
        
        $view = new View("mentor/view_more");
    }
    public function edit(){
        $itemid=$_GET['id'];
        echo $itemid;
        $result=$this->model->edit_item($itemid);
        $view = new View("mentor/edit");
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
        $result=$this->model->submit_edit($availweight, $minweight,  $startdate, $enddate, $price, $itemdes, $itemid);
        header("location: /thoga.lk/mentor/insert_sucess");
    }

    public function delete_item(){
       
        $itemid= $_GET['id'];
        echo "dddd"; 
        $result = $this->model->delete_item($itemid);
        header("location: /thoga.lk/mentor/listed");


    }

    public function view_farmerlist(){
        session_start();
        $mentoruserid=$_SESSION['user'][0]['user_id'];
        $mentorid = $this->model->get($mentoruserid);

        $result=$this->model->view_farmers($mentorid[0]['mentor_id']);
        print_r($result);
        //echo "ddd";
        
        $view = new View("mentor/verticalnavbar");
        $view->assign('data',$result);

    }
}


?>