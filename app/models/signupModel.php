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
        $password=$arr['Bpwd'];
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

        $sql = "INSERT INTO user (firstname, lastname, usename, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";
        $result=$this->connection->query($sql);
        if($result){}else echo "<script>alert('error in SignUp0');</script>";

        $sql1 = "SELECT * FROM user WHERE usename='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user-id'];

        $sql3="INSERT INTO address(`user-id`, address_line1, address_line2, city,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){}else echo "<script>alert('error in SignUp1');</script>";

        $sql2="INSERT INTO buyer (user_id, br_no, b_name) Values ('".$uid."','".$businessname."','".$brNO."')";
        $result2=$this->connection->query($sql2);
        if($result){}else echo "<script>alert('error in SignUp2');</script>";
    }

    function addfarmer($arr){
        $firstname=$arr['Ffn'];
        $lastname=$arr['Fln'];
        $username=$arr['Funame'];
        $password=$arr['Fpwd'];
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

        $sql = "INSERT INTO user (firstname, lastname, usename, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";

        $result=$this->connection->query($sql);
        if($result){}else echo "<script>alert('error in SignUp');</script>";
        
        $sql1 = "SELECT * FROM user WHERE usename='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user-id'];
        $mid=0; //mentor


        $sql2="INSERT INTO farmer (user_id, `farmer's_idNo`, farm_name, mentor_id) Values ('".$uid."','".$FarmerIDno."','".$FarmName."','".$mid."')";
        $result2=$this->connection->query($sql2);
        if($result){}else echo "<script>alert('error in SignUp');</script>";
        

        $sql3="INSERT INTO address(`user-id`, address_line1, address_line2, city,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){}else echo "<script>alert('error in SignUp');</script>";

    }

    function adddriver($arr){
        $firstname=$arr['Dfn'];
        $lastname=$arr['Dln'];
        $username=$arr['DUname'];
        $password=$arr['Dpwd'];
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
        $usertype=$arr['usertype']; //2 for farmer
        $FarmerIDno=$arr['Ffarmerid'];
        $FarmName=$arr['Ffarmname'];

        $sql = "INSERT INTO user (firstname, lastname, usename, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";

        $result=$this->connection->query($sql);
        if($result){}else echo "<script>alert('error in SignUp');</script>";
        
        $sql1 = "SELECT * FROM user WHERE usename='".$username."'";
        $result1=$this->connection->query($sql1);
        $row=mysqli_fetch_assoc($result1);
        $uid=$row['user-id'];
        $mid=0; //mentor


        $sql2="INSERT INTO farmer (user_id, `farmer's_idNo`, farm_name, mentor_id) Values ('".$uid."','".$FarmerIDno."','".$FarmName."','".$mid."')";
        $result2=$this->connection->query($sql2);
        if($result){}else echo "<script>alert('error in SignUp');</script>";
        

        $sql3="INSERT INTO address(`user-id`, address_line1, address_line2, city,	province_name, zip_code) VALUES ('".$uid."','"
        .$addressline1."','".$addressline2."','".$hometown."','".$province."','".$postalcode."')";
        $result3=$this->connection->query($sql3);
        if($result3){}else echo "<script>alert('error in SignUp');</script>";

    }



}
?>