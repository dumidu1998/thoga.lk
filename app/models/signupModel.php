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
        $gpsLo=0;
        $gpsLa=0;
        $usertype=1; //#############################################

        $sql = "INSER INTO user (firstname, lastname, usename, password, NIC, email, contactno1, contactno2, dob, gender,
         cancel_count, hometown,	nearestcity1,	nearestcity2,	GPS_Logitude,	GPS_latitude,	usertype_id)
        VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$NIC."','".$email."','".$contact1."','".$contact2.
        "','".$dob."','".$gender."','".$cancel_count."','".$hometown."','".$nearestcity1."','".$nearestcity2."','".$gpsLo."','".
        $gpsLa."','".$usertype."')";
        echo $sql;
        $result=$this->connection->query($sql);
        if($result)echo"done";else echo "<script>alert('error in SignUp');</script>";
    }
}
?>