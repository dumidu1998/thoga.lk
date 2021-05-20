<?php

require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/insertMentor.php');
require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../models/userModel.php');
require_once(__DIR__.'/../models/mentorModel.php');
require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../models/orderModel.php');
require_once(__DIR__.'/../models/vegetablesModel.php');




class mentorController{
    function __construct(){

        $this->imodel=new item();
        $this->fmodel=new farmerModel();
        $this->userModel = new userModel();
        $this->mModel = new mentorModel();
        $this->oModel = new orderModel();
        $this->vegeModel = new vegetablesModel();
    }

    public function updateprofilepic(){
        session_start();
        print_r($_FILES['profpic']);
        if(isset($_FILES['profpic'])){
            $errors= array();
            $file_name = $_FILES['profpic']['name'];
            $file_tmp =$_FILES['profpic']['tmp_name'];        
            $file_type=$_FILES['profpic']['type'];
            $temp=explode('.',$_FILES['profpic']['name']);
            $file_ext=end($temp);
            $extensions= array("jpeg","jpg","png","JPG","JPEG");

            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            $id=$_SESSION['user'][0]['user_id'];
            if(empty($errors)==true){
                move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/mentorpropic/".$id.".jpg");
                echo "Success";
                header("location:/thoga.lk/mentor/profile?sucess=1");
             }else{
                print_r($errors);
             }
        }else{
            echo "file Upload Failed";
        }
        
    }

    public function add_item()
    {
        session_start();
        $mentoruserid=$_SESSION['user'][0]['user_id'];
        $mentorid = $this->mModel->get($mentoruserid);
      //  print_r($mentoruserid);
      //  print_r($mentorid);
        $result = $this->fmodel->get_records();
        $result3 = $this->mModel-> join_get($mentorid[0]['mentor_id']);
        
        $view = new view("mentor/add_item(mentor)");
        $view->assign('records',$result);
        $view->assign('farmers',$result3);
        
       
    }
    

    public function insert_items(){

        session_start();

        foreach($_SESSION['user'] as $keys => $values){
            $id = $values['user_id'] ;
            $res = $this->mModel->read_id($id);
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

            $this->imodel->insert_databymentor($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$farmername,$ides,$m_id);
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
        $mentorid = $this->mModel->get($mentoruserid);
        $result1=$this->mModel->view_farmers($mentorid[0]['mentor_id']);
        $result=array();
        foreach($result1 as $key=>$values){
            array_push($result,$this->fmodel->get_details($values['farmer_id']));
        }
        $view = new View("mentor/mentor_upcoming");
        $view ->assign('data',$result);
        $view->assign('data1',$result1);
    }

    public function listed_items()
    {
        session_start();
        $mentoruserid=$_SESSION['user'][0]['user_id'];
        $mentorid = $this->mModel->get($mentoruserid);
        $view = new view("mentor/listed_item(mentor)");
        $result = $this->imodel->get_info($mentorid[0]['mentor_id']);
        $view ->assign('data',$result);

       
         
        
    }

    public function view_price(){
        $market=$this->vegeModel->getmprices();
        $view = new view("mentor/mentor_price");
        $view->assign('marketp',$market);
    }
    public function about(){
        $view = new view("mentor/aboutus");
    }
    public function profile(){
        session_start();
        $id=$_SESSION['user'][0]['user_id'];
        echo $id;
        $result = $this->mModel->getmentorallbyid($id);
        $view = new view("mentor/profile");
        $view->assign('all',$result[0]);
    }

    public function editprofile(){
        print_r($_GET);
        

        $out= $this->mModel->updatedetails($_GET);
        if($out){
            header("location:/thoga.lk/mentor/profile?error=0");
        }else{
            header("location:/thoga.lk/mentor/profile?error=1");
        }
    }  





  public function public_profile(){
        $farmerid=$_GET['id'];
       

        $result=$this->fmodel->view_public_profile($farmerid);
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
        $result=$this->imodel->edit_itembyid($itemid);
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
        $result=$this->imodel->submit_edit($availweight, $minweight,  $startdate, $enddate, $price, $itemdes, $itemid);
        header("location: /thoga.lk/mentor/insert_sucess");
    }

    public function delete_item(){
       
        $itemid= $_GET['id'];
        echo "dddd"; 
        $result = $this->imodel->delete_item($itemid);
        header("location: /thoga.lk/mentor/listed");


    }

    public function view_farmerlist(){
        session_start();
        $mentoruserid=$_SESSION['user'][0]['user_id'];
        $mentorid = $this->mModel->get($mentoruserid);

        $result=$this->mModel->view_farmers($mentorid[0]['mentor_id']);
        print_r($result);
        //echo "ddd";
        
        $view = new View("mentor/verticalnavbar");
        $view->assign('data',$result);

    }

    public function viewmore(){
        if(isset($_GET['id'])){
            $order_id=$_GET['id'];
            $res = $this->oModel->order_drivername($order_id);
            $buyer = $this->oModel->order_buyername($order_id);
            $items = $this->oModel->orderdetails_total($order_id);
            $city= $this->oModel->order_city($order_id);
            $ordstatus=$this->oModel->getstatus($order_id);
        }
        $result = $this->oModel->get_order_details($order_id);
        $view = new View("Farmer/view_more");
        $view->assign('order_id',$order_id);
        $view->assign('view',$result);
        $view->assign('res',$res);
        $view->assign('buyer',$buyer);
        $view->assign('cityy',$city);
        $view->assign('items',$items);
        $view->assign('ordstatus',$ordstatus);
    }
}


?>