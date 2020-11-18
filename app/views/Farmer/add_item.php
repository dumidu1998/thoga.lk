
<html>
<head>
<title>Add Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/add_item.css">

</head>



<body background= "/thoga.lk/public/images/Farmer/index1.jpg">
<?php include 'navbar_dash.php';?>

<h1 class="title">Add your item here....</h1>



<div class="container">
  <form action="insert" method="post">

    <div class="row">
      <div class="left">
        <label for="iname">Item Name</label>
      </div>
      <div class="right">
        <select class="textt" id="itemname" name="itemname"  required >
          <option>-------- Select Vegetables --------- </option>
          <?php
          foreach($records as $key =>$values)
          {
            $vegname = $values['vege_name'];
         
          ?>
          <option><?php echo $vegname;?></option>

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
        <input type="number" id="avaiweight" name="avaiweight" required>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <label for="mw">Minimum Weight (kg)</label>
      </div>
      <div class="right">
        <input type="number" id="minweight" name="minweight" required>
      </div>
    </div>


    <div class="price_d">
    <div class="row">
      <div class="left">
        <label for="price">Price (Rs)</label>
      </div>
      <div class="right">
        <input type="text" id="price" name="price" required>
      </div>
    </div>

    <div class="row">
      <div class="left">
        <label for="price">Market Price (Rs)</label>
      </div>
      <div class="right">
        
        <p class="price2">30</p>
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
        <select class="textt" id="itemtype" name="itemtype"  required>
          <option value="organic">Organic</option>
          <option value="inorganic">Non-organic</option>
          
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
    
    
   
    
    <div class="row">
      <div class="left">
        <label for="pic">Item Image</label>
      </div>
      <div class="right">
        <input type="file" id="itemimage" name="itemimage">
      </div>
    </div>
    
    <div class="clearfix">
      <button type="button" class="cancelbtn" onClick="window.location.href='add_item'">Cancel</button>
      <button type="submit" class="submitbtn" name="submit">Submit</button>
    </div>

    </form>
    
  
</div> 

<?php //include("footer.php"); ?>
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


</body>
</html>


