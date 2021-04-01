<html>
<head>
<title>Add Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/add_item.css">

</head>

<?php include 'navbar_dash.php';?>

<body>

<h1 class="title">Add your item here....</h1>



<div class="container">
  <form action="insert" method="post">
    <div class="row">
      <div class="left">
        <label for="iname">Item Name</label>
      </div>
      <div class="right">
        <select class="textt" id="itemname" name="itemname" required>
        <option>-------- Select Vegetables--------- </option>
          <?php
          foreach($records as $key =>$values)
          {
            $vegname = $values['vege_name'];
            $vegId = $values['vege_id'];
         
          ?>
          <option value="<?php echo $vegId;?>"><?php echo $vegname;?></option>

          <?php
          }
          ?>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="left">
        <label for="aw">Available Weight (kg)</label>
      </div>
      <div class="right">
        <input type="text" id="avaiweight" name="avaiweight" required>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <label for="mw">Minimum Weight (kg)</label>
      </div>
      <div class="right">
        <input type="text" id="minweight" name="minweight" required>
      </div>
    </div>
    <div>
    <div class="price_d">
    <div class="row">
      <div class="left">
        <label for="price">Price (Rs)</label>
      </div>
      <div class="right">
        <input type="text" id="price" name="price" required>
      </div>
    </div>

        </div>
    
        </div>
    <div class="date">
      <div class="row">
        <div class="left">
          <label for="sdate">Starting Date</label>
        </div>
        <div class="right">
          <input type="date" id="startdate" name="startdate" required>
        </div>
      </div>
      <div class="row">
        <div class="left">
          <label for="edate">Ending Date</label>
        </div>
        <div class="right">
          <input type="date" id="enddate" name="enddate" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <label for="itype">Item Type</label>
      </div>
      <div class="right">
        <select class="textt" id="itemtype" name="itemtype" required>
          <option value="organic">Organic</option>
          <option value="inorganic">Non-organic</option>
          
        </select>
      </div>
    </div>
    
    <div class="id">
    <div class="row">
      <div class="left">
        <label for="fid">Farmer Name</label>
      </div>
      <div class="right">
      <?php
         // print_r( $farmers);?>
      <select class="textt" id="farmername" name="farmername" required>
        <option>------Farmers------</option>
          <?php
          foreach($farmers as $key =>$values)
          {
            $farmername = $values['firstname'].' '.$values['lastname'];
            $farmerId = $values['farmer_id'];
         
          ?>
          <option value="<?php echo $farmerId;?>"><?php echo $farmername;?></option>

          <?php
          }
          ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="left">
        <label for="ides">Item Description</label>
      </div>
      <div class="right">
        <input type="text" id="ides" name="ides" >
      </div>
    </div>
    
    
    
    <div class="clearfix">
      <button type="button" class="cancelbtn" onClick="window.location.href='add_item'">Cancel</button>
      <button type="submit" class="submitbtn" name="submit">Submit</button>
    </div>

    </form>
    
  
</div>  
</div>  



</body>
<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("enddate").setAttribute("min", today);
document.getElementById("startdate").setAttribute("min", today);

</script>

</html>
<?php include("footer.php"); ?>


