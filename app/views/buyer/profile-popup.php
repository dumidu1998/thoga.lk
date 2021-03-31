<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/profile.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

</head>
<body>

<!--  ########### remove comments and include this lines at destinations. name the button id as myBtn######################
<button id="myBtn">Open Modal</button>
<?php //include("modalprofile.php");
?>
 -->

<div id="myModal1" class="modal1">
    <div class="modal-content">
        <span class="close">&times;</span>
            <div class="container">
                <h1 >Profile of Farmer</h1>
                <div class="grid">
                    <div class="grid-item0">
                        <img src="/thoga.lk/public/images/buyer/icons/farmer.png" alt="" class="image" >
                    </div>
                    <div class="grid-item1">
                        <table style="width:100%;border-collapse: collapse;" >
                            <tr>
                                <td>Name:</td>
                                <td>Manthila Bandara</td>
                            </tr>
                            <tr>
                                <td >Address:</td>
                                <td>Line 1</td>

                            </tr>
                            <tr>
                                <td> </td>
                                <td>Line 2</td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td>City</td>
                            </tr>
                            <tr>
                                <td>Contact No.:</td>
                                <td>076 - 948 96 78</td>
                            </tr>
                        </table>    
                    </div>
                </div>
            </div>
    </div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>

</body>
</html>
