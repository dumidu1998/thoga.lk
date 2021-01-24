<?php

require_once(__DIR__.'/../../core/db_model.php');

class signupModel extends db_model{
    function get_all(){
		return $this->read('item',array('*'),null);
    }

    function read_cities(){
        return $this->read('cities',array('*'),null);
    }

    function read_provinces(){
        return $this->read('provinces',array('*'),null);
    }

    function read_districts(){
        return $this->read('districts',array('*'),null);
    }

    function addbuyer($arr){
        $firstname=$arr['Bfn'];
        $lastname=$arr['Bln'];
        $username=$arr['BUname'];
        $password=md5($arr['Bpwd']);
        $NIC=$arr['Bnic'];
        $email=$arr['Bemail'];
        $contact1=$arr['Bcontactno1'];
        $contact2=$arr['Bcontactno2'];
        $dob=$arr['Bdob'];
        $gender=$arr['Bgender'];
        $cancel_count=0;
        $hometown=$arr['Bcity'];
        $nearestcity1=$arr['BNcity1'];
        $nearestcity2=$arr['BNcity2'];
        $businessname=$arr['Bussinessname'];
        $brNO=$arr['BrNo'];
        $gpsLo=0;
        $gpsLa=0;
        $addressline1=$arr['Baddressline1'];
        $addressline2=$arr['Baddressline2'];
        $province=$arr['Bprovince'];
        $district=$arr['Bdistrict'];
        $postalcode=$arr['Bpostalcode'];
        $usertype=$arr['usertype'];   //1 for buyer //#############################################

        $return=0;

        $sql = "INSERT INTO user (firstname, lastname, username, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";
        $result=$this->connection->query($sql);
        
        if($result){$return+=$result;}else echo "<script>alert('error in SignUp');</script>";

        $sql1 = "SELECT * FROM user WHERE username='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user_id'];

        $sql3="INSERT INTO address(`user_id`, address_line1, address_line2, city,district,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$district."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){$return+=$result3;}else echo "<script>alert('error in SignUp');</script>";

        $sql2="INSERT INTO buyer (user_id, br_no, b_name) Values ('".$uid."','".$businessname."','".$brNO."')";
        $result2=$this->connection->query($sql2);
        if($result2){$return+=$result2;}else echo "<script>alert('error in SignUp');</script>";


        return $return;
    }

    function addfarmer($arr){
        $firstname=$arr['Ffn'];
        $lastname=$arr['Fln'];
        $username=$arr['FUname'];
        $password=md5($arr['Fpwd']);
        $NIC=$arr['Fnic'];
        $email=$arr['Femail'];
        $contact1=$arr['Fcontactno1'];
        $contact2=$arr['Fcontactno2'];
        $dob=$arr['Fdob'];
        $gender=$arr['Fgender'];
        $cancel_count=0;
        $hometown=$arr['Fcity'];
        $nearestcity1=$arr['FNcity1'];
        $nearestcity2=$arr['FNcity2'];
        $gpsLo=0;
        $gpsLa=0;
        $addressline1=$arr['Faddressline1'];
        $addressline2=$arr['Faddressline2'];
        $province=$arr['Fprovince'];
        $district=$arr['Fdistrict'];
        $postalcode=$arr['Fpostalcode'];
        $usertype=$arr['usertype']; //2 for farmer
        $FarmerIDno=$arr['Ffarmerid'];
        $FarmName=$arr['Ffarmname'];

        $return =0;
        $sql = "INSERT INTO user (firstname, lastname, username, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";

        $result=$this->connection->query($sql);
        if($result){$return+=$result;}else echo "<script>alert('error in SignUp');</script>";
        
        $sql1 = "SELECT * FROM user WHERE username='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user_id'];
        $mid=-1; //mentor


        $sql2="INSERT INTO farmer (user_id, `farmer's_idNo`, farm_name, mentor_id) Values ('".$uid."','".$FarmerIDno."','".$FarmName."','".$mid."')";
        $result2=$this->connection->query($sql2);
        if($result2){$return+=$result2;}else echo "<script>alert('error in SignUp');</script>";
        

        $sql3="INSERT INTO address(`user_id`, address_line1, address_line2, city,district,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$district."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){$return+=$result3;}else echo "<script>alert('error in SignUp');</script>";

        return $return;

    }

    function adddriver($arr){
        $firstname=$arr['Dfn'];
        $lastname=$arr['Dln'];
        $username=$arr['DUname'];
        $password=md5($arr['Dpwd']);
        $NIC=$arr['Dnic'];
        $email=$arr['Demail'];
        $contact1=$arr['Dcontactno1'];
        $contact2=$arr['Dcontactno2'];
        $dob=$arr['Ddob'];
        $gender=$arr['Dgender'];
        $cancel_count=0;
        $hometown=$arr['Dcity'];
        $nearestcity1=$arr['DNcity1'];
        $nearestcity2=$arr['DNcity2'];
        $gpsLo=0;
        $gpsLa=0;
        $addressline1=$arr['Daddressline1'];
        $addressline2=$arr['Daddressline2'];
        $province=$arr['Dprovince'];
        $district=$arr['Ddistrict'];
        $postalcode=$arr['Dpostalcode'];
        $usertype=$arr['usertype']; //3 for farmer
        $vehiclemodel=$arr['DVmodel'];
        $vehiclenoprovince=$arr['DVProvince'];
        $vehicleno=$vehiclenoprovince." - ".$arr['DVno'];
        $costkm=$arr['costkm'];
        $maxweight=$arr['maxweight'];
        $DLnumber=$arr['DLno'];
        
        $verified=0;
        $curlocation=0;


        $return =0 ;
        $sql = "INSERT INTO user (firstname, lastname, username, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";

        $result=$this->connection->query($sql);
        if($result){$return+=$result;}else echo "<script>alert('error in SignUp');</script>";
        
        $sql1 = "SELECT * FROM user WHERE username='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user_id'];
        
        
        $sql5= "SELECT * FROM driver WHERE user_id='".$uid."'";
        $result5=$this->connection->query($sql5);
        $row=mysqli_fetch_assoc($result5);
        $did=$row['driver_id'];

        $sql2="INSERT INTO driver (user_id, current_location, license_no, verified_state)
         Values('".$uid."','".$curlocation."','".$DLnumber."','".$verified."')";
        $result2=$this->connection->query($sql2);
        if($result2){$return+=$result2;}else echo "<script>alert('error in SignUp');</script>";


        $sql4="INSERT INTO vehicles (driver_id, vehicle_no, cost_km, vehcle_type, maximum_weight, availability)
         Values('".$did."','".$vehicleno."','".$costkm."','".$vehiclemodel."','".$maxweight."','1')";
        $result4=$this->connection->query($sql4);
        if($result4){}else echo "<script>alert('error in SignUp');</script>";
        

        $sql3="INSERT INTO address(`user_id`, address_line1, address_line2, city,district,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$district."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){$return+=$result3;}else echo "<script>alert('error in SignUp');</script>";

        $return+=1;

        return $return;

    }

    function addmentor($arr){
        $firstname=$arr['Mfn'];
        $lastname=$arr['Mln'];
        $username=$arr['MUname'];
        $password=md5($arr['Mpwd']);
        $NIC=$arr['Mnic'];
        $email=$arr['Memail'];
        $contact1=$arr['Mcontactno1'];
        $contact2=$arr['Mcontactno2'];
        $dob=$arr['Mdob'];
        $gender=$arr['Mgender'];
        $cancel_count=0;
        $hometown=$arr['Mcity'];
        $nearestcity1=$arr['MNcity1'];
        $nearestcity2=$arr['MNcity2'];
        $gpsLo=0;
        $gpsLa=0;
        $addressline1=$arr['Maddressline1'];
        $addressline2=$arr['Maddressline2'];
        $province=$arr['Mprovince'];
        $district=$arr['Mdistrict'];
        $postalcode=$arr['Mpostalcode'];
        $usertype=$arr['usertype'];   //4 for mentor 
        $why=$arr['Mwhy'];
        $skills=$arr['Mskills'];
        
        $verified=0;

        $return=0;
        $sql = "INSERT INTO user (firstname, lastname, username, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";
        $result=$this->connection->query($sql);
        if($result){$return+=$result;}else echo "<script>alert('error in SignUp0');</script>";

        $sql1 = "SELECT * FROM user WHERE username='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user_id'];

        $sql3="INSERT INTO address(`user_id`, address_line1, address_line2, city,district,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$district."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){$return+=$result3;}else echo "<script>alert('error in SignUp1');</script>";

        $sql2="INSERT INTO mentor (user_id, why, Skills, verified_state) Values 
        ('".$uid."','".$why."','".$skills."','".$verified."')";
        $result2=$this->connection->query($sql2);
        if($result){$return+=$result2;}else echo "<script>alert('error in SignUp2');</script>";

        $return+=1;

        return $return;
    }

    public function getmaxDid(){
        $sql = "SELECT MAX(driver_id) AS maxid FROM driver";
        $result=$this->connection->query($sql);
        $row=mysqli_fetch_assoc($result);
        $uid=$row['maxid'];
        return $uid;
    }


}
?>