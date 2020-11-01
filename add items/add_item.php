<?php require_once('connection.php'); ?>







<html>
<head>
<title>Add Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="add_item.css">

</head>
<?php include 'add_item_navbar.php';?>

<body background= "index1.jpg">
<?php include 'add_item_navbar.php';?>
s
<h1 class="title">Add your item here....</h1>



<div class="container">
  <form action="add_item.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="iname">Item Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="iname" name="itemname" required>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="aw">Available Weight</label>
      </div>
      <div class="col-75">
        <input type="text" id="aw" name="avaiweight" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mw">Minimum Weight</label>
      </div>
      <div class="col-75">
        <input type="text" id="mw" name="minweight" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" required>
      </div>
    </div>
    <div class="date">
	    <div class="row">
	      <div class="col-25">
	        <label for="sdate">Starting Date</label>
	      </div>
	      <div class="col-75">
	        <input type="date" id="sdate" name="startdate" required>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-25">
	        <label for="edate">Ending Date</label>
	      </div>
	      <div class="col-75">
	        <input type="date" id="edate" name="enddate" required>
	      </div>
	    </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="itype">Item Type</label>
      </div>
      <div class="col-75">
        <select id="itype" name="itemtype" required>
          <option value="organic">Organic</option>
          <option value="inorganic">Inorganic</option>
          
        </select>
      </div>
    </div>
    
    <div class="id">
    <div class="row">
      <div class="col-25">
        <label for="fid">Farmer ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="fid" name="farmerid" required>
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
    
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="submitbtn" name="submit">Submit</button>
    </div>

    </form>
    
  
</div>    



<script src="add_item.js"></script>
</body>
</html>


