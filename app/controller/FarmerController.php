<?php


require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../models/userModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/insertmodel.php');
require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../models/insertMentor.php');
require_once(__DIR__.'/../models/orderModel.php');
require_once(__DIR__.'/../models/vegetablesModel.php');



class FarmerController{
    function __construct()
    {
        $this->fmodel = new farmerModel();
        $this->itemModel = new item();
        $this->model3 = new insertMentor();
        $this->itemModel = new item();
        $this->userModel = new userModel();
        $this->oModel = new orderModel();
        $this->vegeModel = new vegetablesModel();
    }

    
    public function listed_items()
    {
        session_start();

        $farmeruserid=$_SESSION['user'][0]['user_id'];

        $farmerid=$this->fmodel->read_id($farmeruserid);
       
        $view = new view("Farmer/listed_items");
        $result = $this->fmodel->get_info($farmerid[0]['farmer_id']);
        $view ->assign('data',$result);
    }

    public function upcoming()
    {
        session_start();

        $farmeruserid=$_SESSION['user'][0]['user_id'];

        $farmerid=$this->fmodel->read_id($farmeruserid);

        $statdata1 = $this->itemModel->getallitems($farmerid[0]['farmer_id']); 
        $statdata2 = $this->oModel->getorders30($farmerid[0]['farmer_id']); 
        $statdata3 = $this->oModel->getsales30($farmerid[0]['farmer_id']); 
        $view = new View("Farmer/upcoming");
        $result = $this->fmodel->get_details($farmerid[0]['farmer_id']);
        $view ->assign('data',$result);
        $view ->assign('statdata1',$statdata1);
        $view ->assign('statdata2',$statdata2[0]['count']);
        $view ->assign('statdata3',$statdata3[0]['sum']);
    }

    //upcoming

    public function add_item()
    {
        $view = new view("Farmer/add_item");
        $result = $this->fmodel->get_records();
        $view->assign('records',$result);
        
        
    }
    public function view_price(){
        $market=$this->vegeModel->getmprices();
        $view = new view("Farmer/price");
        $view->assign('marketp',$market);
    }

    public function profile(){
        session_start();
        $farmeruserid=$_SESSION['user'][0]['user_id'];
        //echo $farmeruserid;
  
        $farmerid=$this->fmodel->read_id($farmeruserid);
        // print_r ($farmerid[0]['mentor_id']);
        $mentorid=$farmerid[0]['mentor_id'];
        print_r($farmerid[0]['farmer_id']);
        $result = $this->fmodel-> getfarmerallbyid($farmerid[0]['farmer_id']);

        $result2 = $this->oModel->getOrderHistory($farmerid[0]['farmer_id']);
       // print_r($result2);
        $view = new View("Farmer/farmer_profile");
        if((int)$mentorid>0){
            $mentordetails=$this->model3->getMentor_details($mentorid);
            $view->assign('mentor',$mentordetails[0]);
        }
        
        $mentordetails[0]['firstname']='No Mentor ';
        $mentordetails[0]['lastname']='Requested';
        $view->assign('mentor',$mentordetails[0]);
        $view->assign('all',$result[0]);
        $view->assign('fid',$farmerid[0]['farmer_id']);
        $view->assign('data',$result2);

    }

    public function requestmentor(){
        $fid=$_GET['id'];
        $out=$this->fmodel->requestmentor($fid);
        session_start();
        print_r($out);
        if($out){
            $_SESSION['farmer']['mentor_id']=0;
            header("location:/thoga.lk/farmer/dash");
        }
    }
    
    public function changepwd(){
        if(isset($_POST['changepwd'])){
            $curpwd=$_POST['currentpwd'];
            $newpwd=$_POST['newpwd'];
            $confirmpwd=$_POST['confirmpwd'];
            $uid=$_POST['id'];
            $curpwddb=$this->userModel->obtainpassword($uid);
            print_r($curpwddb);
            $curpwddb=$curpwddb[0]['password'];
            print_r($curpwddb);
            if(strcmp($curpwddb,md5($curpwd))){
                echo "error";
            header("location:/thoga.lk/farmer/profile?error=1");
        }else{
            echo"db ok";
            if(strcmp($confirmpwd,$newpwd)){
                echo "error1";
                header("location:/thoga.lk/farmer/profile?error=1");
            }else{
                $out=$this->userModel->editpassword(md5($newpwd),$uid);
                if($out){
                    header("location:/thoga.lk/farmer/profile?pwderror=0");
                }else{

                }
                }
            }
        }

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
                move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/farmerpropics/".$id.".jpg");
                echo "Success";
                header("location:/thoga.lk/farmer/profile");
             }else{
                print_r($errors);
             }
        }else{
            echo "file Upload Failed";
        }
        
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
        $f_id=0;
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
            $enddate = $_POST['enddate'];
            $itemtype = $_POST['itemtype'];
            $ides = $_POST['ides'];
            
            if($itemname!=="100"){
                $this->itemModel->insert_data($itemname,$avaiweight,$minweight,$price,$enddate,$itemtype,$ides,$f_id);
                header("location: /thoga.lk/farmer/insert");
            }else{
                $othername=$_POST['othertype'];
                $this->itemModel->insert_data_other($itemname,$othername,$avaiweight,$minweight,$price,$enddate,$itemtype,$ides,$f_id);
               header("location: /thoga.lk/farmer/insert");
                
            }

        }
    }


    public function forum(){
        $view = new view("Farmer/forum");
    }

    public function about(){
        $view = new view("Farmer/aboutus");
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

    public function removementor(){
        $fid=$_GET['fid'];
        $this->fmodel->removementor($fid);
        header("location: /thoga.lk/farmer/profile");
    }

    public function getthogarprice(){
        $vegeid=$_GET['vegid'];
        $result=$this->vegeModel->getmpricebyid($vegeid);
        echo $result[0]['current_price'];
    }

}


?>