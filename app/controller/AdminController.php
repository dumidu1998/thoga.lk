<?php

require_once(__DIR__.'/../models/adminModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/vegetablesModel.php');
require_once(__DIR__.'/../models/driverModel.php');
require_once(__DIR__.'/../models/mentorModel.php');
require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../models/orderModel.php');
require_once(__DIR__.'/../models/vehicleModel.php');
require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../models/userModel.php');
require_once(__DIR__.'/../models/forumModel.php');


class AdminController {
    function __construct()
    {
        $this->model = new AdminModel();
        $this->vegetables = new vegetablesModel();
        $this->drivers = new driverModel();
        $this->mentors = new mentorModel();
        $this->farmers = new farmerModel();
        $this->orders = new orderModel();
        $this->vehicles = new vehicleModel();
        $this->item = new item();
        $this->users = new userModel();
        $this->forum = new forumModel();
    }

    public function index(){
        $summary30days=$this->model->get30days();
        $userscount=$this->model->getusers();
        $activeproducts=$this->model->getactiveproducts();
        $results=$this->drivers->get_pending();
        $resultsvehcles=$this->vehicles->get_pending();
        $mentors=$this->mentors->get_pending();
        $farmers=$this->farmers->get_mentor_requests();
        $orders=$this->orders->get_all_for_chart();
        $view = new View("admin/index");
        $view->assign('results', $results);
        $view->assign('resultsvehcles', $resultsvehcles);
        $view->assign('mentors', $mentors);
        $view->assign('farmers', $farmers);
        $view->assign('ordersforchart', $orders);
        $view->assign('summary30days', $summary30days[0]);
        $view->assign('userscount', $userscount[0]);
        $view->assign('activeproducts', $activeproducts[0]);
    }

    public function vieworders(){
        if(isset($_GET['process'])){
            if(isset($_GET['ordtypeu']) && isset($_GET['ordtypef']) && $_GET['ordtypeu']=="up" && $_GET['ordtypef']=="f" ){
                $results=$this->model->orderdetails();
                $upcoming=$this->model->upcomming();
                $cancelled=0;
            }else if(isset($_GET['ordtypeu']) && $_GET['ordtypeu']=="up"){
                $upcoming=$this->model->upcomming();
                $results=0;
                $cancelled=0;
            }else if(isset($_GET['ordtypef']) && $_GET['ordtypef']=="f"){
                $results=$this->model->orderdetails();
                $upcoming=0;
                $cancelled=0;
            }else if($_GET['uname']!=null){
                $results=$this->model->orderdetails_uname($_GET['uname']);
                $upcoming=$this->model->upcomming_uname($_GET['uname']);
                $cancelled=0;
            }else{
                $results=$this->model->orderdetails();
                $upcoming=$this->model->upcomming();
                $cancelled=$this->orders->getcancelled();
            }
        }else{
            $results=$this->model->orderdetails();
            $upcoming=$this->model->upcomming();
            $cancelled=$this->orders->getcancelled();
        }
        $view = new View("admin/vieworders");
        $view->assign('results', $results); 
        $view->assign('upcoming', $upcoming); 
        $view->assign('cancelled', $cancelled); 
        $view->assign('get', $_GET); 
    }
    
    public function showorder(){
        $ordid=$_GET['ord_id'];
        if(isset($_GET['ord_id'])){
            $order_id=$_GET['ord_id'];
            $driver = $this->orders->order_drivername($order_id);
            $buyer = $this->orders->order_buyername($order_id);
            $items = $this->orders->orderdetails_total($order_id);
            $order_all= $this->orders->order_all($order_id);
            $rating=$this->orders->getrating($order_id);
        }
        if(empty($rating)){
            $rating[0]['points']="Not Rated";
        }
        // print_r( $buyer[0]);
        // print_r( $driver[0]);
        // print_r( $order_all[0]);

        // print_r( $rating);
        // print_r( $items[0]);

        $view = new View("admin/orderdetails");
        $view->assign('buyer', $buyer[0]); 
        $view->assign('driver', $driver[0]); 
        $view->assign('items', $items);
        $view->assign('order_all', $order_all[0]);
        $view->assign('rating', $rating[0]);
    }

    public function cancelorder(){
        $order_id=$_GET['ordid'];
        echo $order_id;
        $out=$this->orders->cancelorder($order_id);
        header("location: ../admin/vieworders?cancelled=$order_id");
    }
    

    public function admanager(){
        $ads=$this->model->getads();
        $view = new View("admin/admanager");
        $view->assign('ads', $ads); 
    }

    public function usermanager(){
        if(isset($_GET['process'])){
            if(isset($_GET['uname'],$_GET['utype']) && $_GET['uname']==""){
                $output=$this->users->getallbyutype($_GET['utype']);
            }else if(isset($_GET['uname'],$_GET['utype']) && $_GET['uname']!=""){
                $output=$this->users->getallbyutypeanduname($_GET['utype'],$_GET['uname']);
            }else if(isset($_GET['uname']) && $_GET['uname']!=""){
                $output=$this->users->getallusersbyuname($_GET['uname']);
            }else if(isset($_GET['uname']) && $_GET['uname']==""){
                $output=$this->users->getallusers();
            }
        }else{
            $output=$this->users->getallusers();
        }
        $view = new View("admin/usermanager");
        $view->assign('users', $output);
    }
    
    public function showpricelist(){
        $view = new View("admin/pricelist");
    }

    public function viewuser(){
        $user_id=$_GET['uid'];
        $output=$this->users->getAlldetailsforprofile($user_id);
        $usertype=$output[0]['user_type'];
        $typedetails=$this->users->gettypedetails($user_id,$usertype);
        $view = new View("admin/userview");
        $view->assign('userdetails', $output[0]);
        $view->assign('typedetails', $typedetails[0]);
    }

    public function profileaction(){
        print_r($_POST);
        $uid=$_POST['id'];
        $pwd=$_POST['pwd'];
        $action=$_POST['action'];
        $out=$this->model->checkpwd(1,$pwd);
        $out=$out[0]['numrow'];
        if($out==1){
            if($action=='rstpwd'){
                $this->model->rstpwd($uid);
                header("location: userview?uid=$uid&pwdresetted=1");
            }else if($action=='deleteuser'){
                $this->model->removeuser($uid);
                header("location: usermanager?usrremoved=1");
            }else if($action=='block'){
                $this->model->blockuser($uid);
                header("location: userview?uid=$uid&blocked=1");
            }
        }else{
            header("location: userview?uid=$uid&pwderror=1");
        }

    }

    public function driverapplication(){
        if(isset($_GET['id'])&&isset($_GET['vid'])){
            $status= "Adding New Vehicle";
            $id=$_GET['id'];
            $vid=$_GET['vid'];
            $basic= $this->drivers->get_basic($id);
            $vehicle= $this->drivers->get_vehicle_detailsbyvid($vid);
            $view = new View("admin/Driver_application");
            $view->assign('id', $id); 
            $view->assign('basic', $basic); 
            $view->assign('vehicle', $vehicle);
            $view->assign('status', $status);
        }else if(isset($_GET['id'])&&!isset($_GET['vid'])){
            $status= "First Registration";
            $id=$_GET['id'];
            $basic= $this->drivers->get_basic($id);
            $vehicle= $this->drivers->get_vehicle_details($id);
            $view = new View("admin/Driver_application");
            $view->assign('id', $id); 
            $view->assign('basic', $basic); 
            $view->assign('vehicle', $vehicle);
            $view->assign('status', $status);
        }
    }

    public function mentorapplication(){
        $m_id = $_GET['id'];
        $output=$this->mentors->getallbyid($m_id);
        $view = new View("admin/Mentor_application");
        $view->assign('all', $output[0]);
    }

    public function acceptmentor(){
        print_r($_POST);
        $mentor_id=$_POST['mentor_id'];
        if(isset($_POST['rejected'])&&isset($_POST['reason'])){
            $output=$this->mentors->reject($mentor_id,$_POST['reason']);
            header("location: ../admin?acceptm=0");
            
        }
        if(isset($_POST['accpted'])){
            $output=$this->mentors->accept($mentor_id);
            header("location: ../admin?acceptd=1");

        }
    }

    public function mentorrequest(){
        $farmer_id=$_GET['id'];
        $output=$this->farmers->getfarmerallbyid($farmer_id);
        $farmerdistrict=$output[0]['disid'];
        $mentors=$this->mentors->getallmentorsindistrict($farmerdistrict);
        $view = new View("admin/Mentor_request");
        $view->assign('alldetails', $output[0]);
        $view->assign('mentors', $mentors);
    }

    public function adsubmit(){
        session_start();
        $in=$_POST;
        $out=$this->model->adsubmit($in);
        $uploadid=$_SESSION['aduploadid'];
        $ext=".jpg";
        $Sfile= $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/tmpuploads/AD_";
        $Dfile= $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/ads/AD_";
        if($out==1){
            rename($Sfile.$uploadid.$ext, $Dfile.$uploadid.$ext);
            $_SESSION['msg']="Advertisement Submitted Sucessfully";
            echo "<script> alert 'Advertisement added Sucessfully!'; </scrpit>";
        }else{
            unlink($Sfile.$uploadid.$ext);
            $_SESSION['error']="Submit Error. Try Again";

        }
        header("location: /thoga.lk/admin/admanager");
    }

    public function showadmin(){
        $result=$this->model->showadmins();
        $view = new View("admin/admins");
        $view->assign('results', $result); 
    }
    
    public function deletead(){
        $id=$_GET['id'];
        $this->model->deletead($id);
        header("location: /thoga.lk/admin/admanager?deleted=1");
    }
    
    public function disablead(){
        $id=$_GET['id'];
        $this->model->disablead($id);
        header("location: /thoga.lk/admin/admanager");
    }
    public function deletepost(){
        $id=$_GET['id'];
        $this->forum->deletepost($id);
        header("location: /thoga.lk/admin/forummanager");
    }
    public function deletereply(){
        $id=$_GET['id'];
        $this->forum->deletereply($id);
        header("location: /thoga.lk/admin/forummanager");
    }

    public function addadmin(){
        session_start();
        $return = $this->model->addadmin($_POST);
        if($return ==1){
            $_SESSION['msg']="New Admin Added Sucessfully";
            // header("location: showadmin");
        }else{
            $_SESSION['error']="1";
            // header("location: showadmin");
        }
    }
    
    public function addVeg(){
        $results=$this->vegetables->get_all_vegetables();
        $view = new View("admin/add_veg");
        $view->assign('vegetables', $results);
    }

    public function editVeg(){
        if(isset($_POST['edit'])){
            $this->vegetables->update_vegetables($_POST['id'],$_POST['prev_price'],$_POST['curr_price'],$_POST['veg_name']);
        }
        if(isset($_POST['del'])){
            echo "<script>confirm('Are you sure to delete vegetable?');</script>";
            $this->vegetables->delete_vegetables($_POST['id']);
        }
        header("location: vegetables?success=1");
    }

    public function addnewveg(){
        if(isset($_POST['add'])){
            $this->vegetables->add_vegetable($_POST['veg_name'],$_POST['price']);
        }
        header("location: vegetables?success=1");

    }

    public function forummanager(){
        $postsandreplies=$this->forum->getpostswithtopreply();
        $arr=array();
        $replies=array();
        $reply=array();
        foreach($postsandreplies as $key=>$values){
            array_push($arr,['id'=>$values['post_id'],'user_id'=>$values['user_id'],'title'=>$values['title'],'description'=>$values['description'],'fname'=>$values['firstname'],'lname'=>$values['lastname']]);
            $replies=$this->forum->getreplyandauthor($values['post_id']);
            array_push($arr[$key],['replies'=>$replies]);
        }
        $key=0;
        // print_r($arr);
        $view = new View("admin/forumManager");
        $view->assign('data', $arr);

    }

    public function addupload(){
        session_start();
        $out=$this->model->getmaxadid();
        $uid=$out[0]['maxid'];
        $uid++;
        $_SESSION['aduploadid']=$uid;
        $fileN = $_FILES["file"]["name"]; // The file name
        $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
        $fileType = $_FILES["file"]["type"]; // The type of file it is
        $fileSize = $_FILES["file"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["file"]["error"]; // 0 for NO erros... and 1 for errors
        $ext = "jpg";
        
        $fileName="AD_".$uid.".".$ext;
        
        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please browse for a file before clicking the upload button.";
            exit();
        }
        
        if(move_uploaded_file($fileTmpLoc, $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/tmpuploads/$fileName")){
            echo "File upload is complete";
        } else {
            echo "move_uploaded_file function failed";
        }
    }


    public function assignmentor(){
        print_r($_POST);
        if(isset($_POST['accpted']) && isset($_POST['mentor_id']) && isset($_POST['farmer_id'])){
            $out=$this->mentors->assignmentor($_POST['mentor_id'],$_POST['farmer_id']);
            header("location: ../admin?mentor_assigned=1");
        }else if(isset($_POST['rejected']) && isset($_POST['reason'])){
            $out=$this->mentors->rejectassignmentor($_POST['mentor_id'],$_POST['farmer_id']);
            //send email/sms with reason
            header("location: ../admin?mentor_assigned=1");
        }else{
            header("location: ../admin?mentor_assign_error=1");
        }
    }


    
    public function driveraccept(){
        print_r($_POST);
        if(isset($_POST['accepted']) && isset($_POST['existing_driver'])){
            $this->vehicles->accept($_POST['driverid']);
            echo "accepted";
            header("location: ../admin?acceptd=1");
        }else if(isset($_POST['rejected']) && isset($_POST['existing_driver'])){
            $this->vehicles->reject($_POST['vid'],$_POST['reason']);
            echo "rejected";
            header("location: ../admin?acceptd=0");
        }else if(isset($_POST['accepted']) && !isset($_POST['existing_driver'])){
            $this->drivers->accept($_POST['driverid']);
            $this->vehicles->accept($_POST['vid']);
            echo "accepted";
            header("location: ../admin?acceptd=1");
        }else if(isset($_POST['rejected']) && !isset($_POST['existing_driver'])){
            $this->drivers->reject($_POST['driverid'],$_POST['reason']);
            $this->vehicles->reject($_POST['vid'],$_POST['reason']);
            echo "rejected";
            header("location: ../admin?acceptd=0");
        }
    }

    public function activeitems(){
        $others= $this->vegetables->get_other();
        $all= $this->vegetables->get_all_vege();
        $veg= $this->vegetables->get_all_vegetables();
        
        $view = new View("admin/activeItems");
        $view->assign('other', $others);
        $view->assign('all', $all);
        $view->assign('veg', $veg);
        
    }
    
    
    public function edititem(){
        $itemid=$_POST['itemid'];
        $vegid=$_POST['vegeid'];
        $this->vegetables->update_category($vegid,$itemid);
        header("location: activeitems?done=1");
    }

    public function delete_item(){
        $itemid=$_GET['itemid'];
        $this->item->delete_item($itemid);
        header("location: activeitems?done=1");
    }

}




    ?>