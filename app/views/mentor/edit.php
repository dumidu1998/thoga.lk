<html>
<head>
<title>Edit Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/edit.css">

</head>



<body background= "/thoga.lk/public/images/Farmer/index1.jpg">
<?php include 'navbar_dash.php';?>

<h1 class="title">Edit item here....</h1>



<div class="container">
  <form action="insert" method="post">

    <div class="row">
      <div class="left">
        <label for="iname">Item Name</label>
      </div>
      <div class="right">
        <p class ="price2"> Tomato</p>
      </div>
    </div>
    

    <div class="row">
      <div class="left">
        <label for="aw">Available Weight (kg)</label>
      </div>
      <div class="right">
      <p class ="price2"> 200</p>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <label for="mw">Minimum Weight (kg)</label>
      </div>
      <div class="right">
      <p class ="price2"> 50</p>
      </div>
    </div>


<div class="price_d">
    <div class="row">
      <div class="left">
        <label for="price">Price (Rs)</label>
      </div>
      <div class="right">
      <p class ="price2"> 25</p>
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


    


    <div class="row">
      <div class="left">
        <label for="itype">Item Type</label>
      </div>
      <div class="right">
      <p class ="price2"> non-organic</p>
      </div>
    </div>


    <div class="date">
      <div class="row">
        <div class="left">
          <label for="sdate">Starting Date</label>
        </div>
        <div class="right">
        <p class ="price2"type="date"> 2020-11-11</p>
        </div>
      </div>


      <div class="row">
        <div class="left">
          <label for="edate">Ending Date</label>
        </div>
        <div class="right">
        <p class ="price2"type="date"> 2020-11-21</p>
        </div>
      </div>
    </div>

    

    <div class="row">
      <div class="left">
        <label for="ides">Item Description</label>
      </div>
      <div class="right">
      <p class ="price2"> good </p>
      </div>
    </div>
    
    
   
    
    <div class="row">
      <div class="left">
        <label for="pic">Item Image</label>
      </div>
      <div class="right">
      <image width=150px src="/thoga.lk/public/images/Farmer/tomato.jpg">
      </div>
    </div>
    
    <div class="clearfix">
      <button type="button" class="cancelbtn" >Edit</button>
      <button type="submit" class="submitbtn" name="submit">Submit</button>
    </div>

    </form>
    
  
</div> 

<?php // include("footer.php"); ?>



</body>
</html>