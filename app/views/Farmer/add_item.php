
<html>
<head>
<title>Add Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/add_item.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">


</head>



<body >
<?php include 'navbar_dash.php';?>

<h1 class="title">Add your item here....</h1>
 


<div class="container">
  <form action="insert_item" method="post">
  <!-- <form action="" method="get"> -->

    <div class="row">
      <div class="left">
        <label for="iname">Item Name</label>
      </div>
      <div class="right">
        <select class="textt" id="itemname" name="itemname" onchange="getvege()"  required >
          <option>-------- Select Vegetables --------- </option>
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
    

    <div class="row" id="otherdiv" style="display: none">
      <div class="left">
        <label for="other">Other Vegetable Type</label>
      </div>
      <div class="right">
        <input type="text" id="other" name="othertype" >
      </div>
    </div>
    <div class="row" >
      <div class="left">
        <label for="aw">Available Weight (kg)</label>
      </div>
      <div class="right">
        <input type="number" id="avaiweight" min="1" name="avaiweight" required>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <label for="mw">Minimum Weight (kg)</label>
      </div>
      <div class="right">
        <input type="number" id="minweight" min="1" name="minweight" required>
      </div>
    </div>

<div>
    <div class="row">
      <div class="left">
        <label for="price">Price Per kg (Rs)</label>
      </div>
      <div class="right">
        <input type="number" id="price" min="10" name="price" required>
      </div>

        </div>
        
        <div style="color:gray;display:none;" id="Pricedisplay">Thoga.lk Market Price is Rs. <span id="pricedisplayprice"></span></div>

    


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
          <option value="org">Organic</option>
          <option value="non">Non-organic</option>
          
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
// document.getElementById("startdate").setAttribute("min", today);
  

function getvege(){
  var item=document.getElementById('itemname');
  if(item.value==="100"){
    document.getElementById('otherdiv').style.display="";
    document.getElementById('otherdiv').required=true;
    hideprice();
  }else{
    document.getElementById('otherdiv').style.display="none";
    showprice();
  }

  
}

function hideprice(){
  var price=document.getElementById('Pricedisplay');
  price.style.display="none";
}

function showprice(){
  var price=document.getElementById('Pricedisplay');
  var item=document.getElementById('itemname');

  price.style.display="";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('pricedisplayprice').innerHTML=parseFloat(this.responseText).toFixed(2);
      
				}
			};
			xhttp.open("GET", "/thoga.lk/farmer/getthogarprice?vegid="+item.value, true);
			xhttp.send();


}


</script>


</html>


<?php include("footer.php"); ?>
