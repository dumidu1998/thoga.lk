<?php

require_once('db_connection.php');
//do not return anything if on error // now returning ERROR at blah blah
class db_model{

	function __construct(){
		//echo 'db_model class created <br>';
		$db = new db_Connection();
        $this->connection =  $db->getConnection();
	}
	
	function create($tableName,$insertWhat){

		$sql='INSERT INTO '.$tableName.'(';
		foreach ($insertWhat as $key => $value)
			$sql .= $key.',';
		
		  $sql=rtrim($sql,',');
		  $sql.=')';
		$sql.=' VALUES(';
		
		foreach ($insertWhat as $key => $value)
			$sql .= '\''.$value.'\',';
		
		  $sql=rtrim($sql,',');
		  $sql.=')';

		  $sql=$this->appendSemicolon($sql);
		//  echo $sql.'<br>';
		// echo $sql.'<br>';

	   $result = $this->connection->query($sql);
		if($result)
			return $result;
		else
			return 'Error at db_MODEL/create'; 
	}

	/*
		****tablename necessary !
		$tableName => 'users'
		
		****what to read
		use accorgingly if all read / read particular column	
		$args => array('*') / array('username','email')
		
		****optional arg (call with null argument to avoid warnings)
		//for where clause
		$whereArgs => array( 'username' => 'jigar_wala') 
		*/
	
	
	function join2tables($output,$table1,$table2,$joincondition,$whereArgs){
		$sql='SELECT ';
		foreach ($output as $key => $value)
		  	 $sql.=$value.',';
		  $sql=rtrim($sql,',');
	    $sql.=' FROM '.$table1;
		$sql.=' INNER JOIN '.$table2.' ON ';
		$sql.=$joincondition;
	   
		if($whereArgs)
		$sql= $this->where($sql,$whereArgs);
		
		$sql=$this->appendSemicolon($sql);

		// echo $sql;
		$finale=array();

		$result = $this->connection->query($sql);
		if($result){
			while($row=mysqli_fetch_assoc($result))
				array_push($finale,$row);
			return $finale;
		}
		else
			return 'Error at db_MODEL/join2tables';
	}

	function join3tables($output,$table1,$table2,$joincondition1,$table3,$joincondition2,$whereArgs){
		$sql='SELECT ';
		foreach ($output as $key => $value)
		  	 $sql.=$value.',';
		  $sql=rtrim($sql,',');
	    $sql.=' FROM '.$table1;
		$sql.=' INNER JOIN '.$table2.' ON ';
		$sql.=$joincondition1;
		$sql.=' INNER JOIN '.$table3.' ON ';
		$sql.=$joincondition2;
	   
		if($whereArgs)
		$sql= $this->where($sql,$whereArgs);
		
		$sql=$this->appendSemicolon($sql);

		// echo $sql;
		$finale=array();
		$result = $this->connection->query($sql);
		if($result){
			while($row=mysqli_fetch_assoc($result))
				array_push($finale,$row);
			return $finale;
		}
		else
			return 'Error at db_MODEL/join3tables';
	}

	function countrows($sql){
		$result = $this->connection->query($sql);
		return $result->num_rows;
	}



	function queryfromsql($sql){
		$finale=array();
		$result = $this->connection->query($sql);
		// echo $sql;
		if($result){
		while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		return $finale;
		}
		else
			return 'Error at db_MODEL/queryfromsql';	
	}

	

	function read($tableName,$args,$whereArgs){
	
		  $sql='SELECT ';

		 foreach ($args as $key => $value)
		  	 $sql.=$value.',';
		  $sql=rtrim($sql,',');
	   $sql.=' FROM '.$tableName;
	 
	   if($whereArgs)
		$sql= $this->where($sql,$whereArgs);	

	   $sql=$this->appendSemicolon($sql);
	//    echo $sql.'<br>';
		$finale=array();

		$result = $this->connection->query($sql);
		if($result){
		while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		return $finale;
		}
		else
			return 'Error at db_MODEL/read';
		
	}
    function update($tableName,$whatToSet,$whereArgs){
    	$sql='UPDATE '.$tableName .' SET ';
    	foreach ($whatToSet as $key => $value)
    		$sql .= $key .'=\'' . $value . '\',';
    	$sql=rtrim($sql,',');

	   if($whereArgs)
		$sql= $this->where($sql,$whereArgs);	
		$sql=$this->appendSemicolon($sql);
    	// echo $sql.'<br>';
	  $result = $this->connection->query($sql);

		if($result)
			return $result;
		else
			return 'Error at db_MODEL/update';

    }

	

   function delete($tableName,$whereArgs){
   		$sql='DELETE FROM '.$tableName;

	   if($whereArgs)
	   	$sql=$this->where($sql,$whereArgs);
	   $sql=$this->appendSemicolon($sql);
	//    echo $sql.'<br>';
	   $result = $this->connection->query($sql);

		if($result)
			return $result;
		else
			return 'Error at db_MODEL/delete'; 


   }

    function where($sql,$whereArgs){
    	$sql.=' WHERE ';
    	
    	foreach ($whereArgs as $key => $value)
    		$sql.=$key.' = \''.$value.'\' AND ';
    	$sql=rtrim($sql,'AND ');
    	      	
    	return $sql;
    }

	function appendSemicolon($sql){
		if(substr($sql,-1)!=';')
			return $sql.' ;';	
	}


	
	
}



?>