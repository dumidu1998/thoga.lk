<?php

require_once(__DIR__.'/../../core/db_model.php');

class mentorModel extends db_model{

    public function get_pending(){
		$sql = "SELECT mentor.mentor_id ,mentor.date, districts.name_en FROM mentor INNER JOIN user 
		ON mentor.user_id = user.user_id INNER JOIN address ON address.user_id= user.user_id INNER JOIN districts 
		ON address.district=districts.id where mentor.verified_state=0";
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
           while($row=mysqli_fetch_assoc($result)){
			array_push($finale,$row);
		   }
		  return $finale;

		}else
		echo "error";        
    }

    

}

?>