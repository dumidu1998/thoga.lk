<html>
<head>
  <link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/buyer/rating_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="/thoga.lk/public/images/rate/star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="/thoga.lk/public/images/rate/star1.png";
      }
   }

</script>
  
</head>

<body>




<div class="modal" id="modal">


    <div class="rate" id="rate">
    <span class="close" id="close">&times;</span>

    
        <form method="post" action="rate.php">
          <div class="div">
              <p>Mentor</p>
              <input type="hidden" id="php1_hidden" value="1">
              <img src="/thoga.lk/public/images/rate/star1.png" onmouseover="change(this.id);" id="php1" class="php">
              <input type="hidden" id="php2_hidden" value="2">
              <img src="/thoga.lk/public/images/rate/star1.png" onmouseover="change(this.id);" id="php2" class="php">
              <input type="hidden" id="php3_hidden" value="3">
              <img src="/thoga.lk/public/images/rate/star1.png" onmouseover="change(this.id);" id="php3" class="php">
              <input type="hidden" id="php4_hidden" value="4">
              <img src="/thoga.lk/public/images/rate/star1.png" onmouseover="change(this.id);" id="php4" class="php">
              <input type="hidden" id="php5_hidden" value="5">
              <img src="/thoga.lk/public/images/rate/star1.png" onmouseover="change(this.id);" id="php5" class="php">
          </div>
        
          
          <input type="hidden" name="phprating" id="phprating" value="0">
          <input type="hidden" name="asprating" id="asprating" value="0">
          <input type="hidden" name="jsprating" id="jsprating" value="0">
          <input type="submit" value="Submit" name="submit_rating" id="submit">
    </div>
</div>

  


</form> 

</body>

<script>
    var btn=document.getElementById("toggle");
    var mod=document.getElementById("modal");
    var submit= document.getElementById("submit");
    var close= document.getElementById("close");

    btn.onchange = function(e){
        if(e.target.checked) {
            modal.style.display = "block";
            btn.disabled = this.checked;
        }
        submit.onclick = function(e){
            rate.style.display = "none";
        }

        
    }
    close.onclick = function(){
        modal.style.display = "none";
    }
    window.onclick = function(event) {
    if (event.target == mod) {
        mod.style.display = "none";
    }
}


</script>
</html>