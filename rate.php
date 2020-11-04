<html>
<head>
  <link rel="stylesheet" type="text/css" href="rating_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="images/star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="images/star1.png";
      }
   }

</script>
  
</head>

<body>

<label class="switch">
  <input type="checkbox" id="toggle">
  <span class="slider round"></span>
</label>
<script>
    var btn=document.getElementById("toggle");
    var model=document.getElementById("rate");
    var submit= document.getElementById("submit");
    btn.onchange = function(e){
        if(e.target.checked) {
            rate.style.display = "block";
            btn.disabled = this.checked;
        }
        submit.onclick = function(e){
            rate.style.display = "none";
        }

        
    }


</script>
<div class="rate" id="rate">

    <form method="post" action="rate.php">
      <div class="div">
          <p>Farmer </p>
          <input type="hidden" id="php1_hidden" value="1">
          <img src="images/star1.png" onmouseover="change(this.id);" id="php1" class="php">
          <input type="hidden" id="php2_hidden" value="2">
          <img src="images/star1.png" onmouseover="change(this.id);" id="php2" class="php">
          <input type="hidden" id="php3_hidden" value="3">
          <img src="images/star1.png" onmouseover="change(this.id);" id="php3" class="php">
          <input type="hidden" id="php4_hidden" value="4">
          <img src="images/star1.png" onmouseover="change(this.id);" id="php4" class="php">
          <input type="hidden" id="php5_hidden" value="5">
          <img src="images/star1.png" onmouseover="change(this.id);" id="php5" class="php">
      </div>
    
      <div class="div">
          <p>Driver</p>
          <input type="hidden" id="asp1_hidden" value="1">
          <img src="images/star1.png" onmouseover="change(this.id);" id="asp1" class="asp">
          <input type="hidden" id="asp2_hidden" value="2">
          <img src="images/star1.png" onmouseover="change(this.id);" id="asp2" class="asp">
          <input type="hidden" id="asp3_hidden" value="3">
          <img src="images/star1.png" onmouseover="change(this.id);" id="asp3" class="asp">
          <input type="hidden" id="asp4_hidden" value="4">
          <img src="images/star1.png" onmouseover="change(this.id);" id="asp4" class="asp">
          <input type="hidden" id="asp5_hidden" value="5">
          <img src="images/star1.png" onmouseover="change(this.id);" id="asp5" class="asp">
      </div>
      <input type="hidden" name="phprating" id="phprating" value="0">
      <input type="hidden" name="asprating" id="asprating" value="0">
      <input type="hidden" name="jsprating" id="jsprating" value="0">
      <input type="submit" value="Submit" name="submit_rating" id="submit">
</div>

  


</form> 

</body>
</html>