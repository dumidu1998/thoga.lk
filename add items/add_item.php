<?php require_once('connection.php'); ?>


<?php

if (isset($_POST["submit"])) {

	# code...
	$item_name=$_POST["im"];
	$veg_id=$_POST["vid"];
	$minimum_weight=$_POST["mw"];
	$available_weight=$_POST["aw"];
	
	 $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["pic"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$item_type=$_POST["itype"];
	$item_start=$_POST["istart"];
	$item_end=$_POST["iend"];
	$price=$_POST["price"];
	$mentor_id=$_POST["mid"];
	$farmer1_id=$_POST["fid"];



	// check if the farmer_id match with the farmer1_id

	$x="SELECT * FROM farmer WHERE farmer_id='$farmer1_id'";
	$result=mysqli_query($con,$x);

	$row=mysqli_fetch_assoc($result);

	if ($farmer1_id=$row['farmer_id']) {

		// check if the image file is a actual image or fake image


		$check = getimagesize($_FILES["pic"]["tmp_name"]);

		if($check !== false){

			$uploadOk = 1;

			// check if the file already exists

			if (file_exists($target_file)) {
				# code...
				echo "<script> alert('Sorry, Image already exists.') </script>";

				$uploadOk = 0;


			}else{

				// Check if $uploadOk is set to 0 by an error

				if ($uploadOk ==0) {
					# code...
					echo "<script> alert('Sorry your file was not uploaded. ') </script>";

				}else{

					// if everything is ok, try to upload file

					if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
						# code...
						$con=mysqli_connect("localhost","root","thoga.lkdb")or die('connection failed');


						$add="INSERT INTO item
							(item_name,item_type,minimum_weight,available_weight,item_start,item_end,price,farmer_id,mentor_id,item_image) VALUES ('".$_POST['in']."','".$_POST['itype']."','".$_POST['vid']."','".$_POST['mw']."','".$_POST['aw']."','".$_POST['istart']."','".$_POST['iend']."','".$_POST['price']."','".$_POST['fid']."','".$_POST['mid']."','$imgname')";

							$y=mysqli_query($con,$add);

							mysqli_close($con);

								if ($y) {
									# code...
									echo "<script> alert ('Success') </script>";


								}else{
									echo "<script> alert ('Failed') </script>";
								}

					}else {
						echo "<script> alert('Sorry, there was an error in uploading your file') </script>";
					}

				}

			}

		}else{
			echo "<script> alert('Sorry, File is not an image') </script>";
			$uploadOk = 0;
		}

	}else{
		echo "<script> alert ('Farmer_id is incorrect') </script>";
	}



}


?>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="add_item.css">

</head>


<body background= "inex.jpg">
	<?php include 'add_item_navbar.php';?>

<br>
<br>
				


<div class="tabContainer">		


<br>
<br>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="iname">Item Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="iname" name="itemname" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="vid">Vegetable ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="vid" name="vegid">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="aw">Available Weight</label>
      </div>
      <div class="col-75">
        <input type="text" id="aw" name="avaiweight">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mw">Minimum Weight</label>
      </div>
      <div class="col-75">
        <input type="text" id="mw" name="minweight">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sdate">Starting Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="sdate" name="startdate">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="edate">Ending Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="edate" name="enddate">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="itype">Item Type</label>
      </div>
      <div class="col-75">
        <select id="itype" name="itemtype">
          <option value="organic">Organic</option>
          <option value="inorganic">Inorganic</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fid">Farmer ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="fid" name="farmerid">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mid">Mentor ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="mid" name="mentorid">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pic">Item Image</label>
      </div>
      <div class="col-75">
        <input type="file" id="pic" name="itemimage">
      </div>
    </div>
    <br>
    <br>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
    
  </form>
</div> 
</div>


<script src="add_item.js"></script>
</body>
</html>

