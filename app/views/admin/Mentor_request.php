<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/application.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>


</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>Request for Mentor</h1>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/farmer.png" alt="" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
            <span><h3><u>Farmer's Details</u></h3></span>
            <tr>
                <td>Full Name:</td>
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
                <td> </td>
                <td>ZIP code</td>
            </tr>
            <tr>
                <td>Contact No.1:</td>
                <td>076 - 948 96 78</td>
            </tr>
            <tr>
                <td>Contact No.2:</td>
                <td>076 - 948 96 78</td>
            </tr>
            <tr>
                <td>NIC</td>
                <td>982790182 V</td>
            </tr>
            
        </table>    
    </div>
</div>
<div class="selectcontainer">
    
    <h1>Select a Mentor</h1>
    <h3>Select mentor from suggestion list</h3>
    <select name="" id="selectmentor" class="select-css" required placeholder="dd">

        <option value="0" selected disabled hidden>Select a mentor (Name - District - No.of farmers)</option>
        <option value="1">A.K. Jayarathna - Anuradhapura (2)</option>
        <option value="1">C.B. Wickramasingha - Matale (4)</option>
        <option value="1">N. Thilakarathna - Jaffna (1)</option>
    </select>
    <div class="">

    </div>
</div>

    <div class="Bcontainer">
        <h1>Accept or Reject</h1>
        <br>
        <form action="a.php" method="get">
        <label class="CBcontainer">&nbsp Accept
            <input type="checkbox" name="accpted" id="accept" onchange="checkfunc(this.id)" >
            <span class="checkmark"></span>
        </label>
        <label class="CBcontainer">&nbsp Reject
            <input type="checkbox" id="reject" name="rejected" onchange="checkfunc(this.id)" >
            <span class="checkmark"></span>
        </label>
        <textarea name="reason" id="textarea" class="description" cols="40" rows="6" placeholder="Reason for Rejection" style="display:none;margin-left:30%" ></textarea>
       <input type="submit" class="accept-btn" value="Submit    ">
        </form>
    </div>
</div>
</body>
</html>

<script>
function checkfunc(id){
    if(document.getElementById("accept").checked==true || document.getElementById("reject").checked==true ){
        if(id=="reject" && document.getElementById("accept").checked==true){
            document.getElementById("accept").click();
        }else if(id=="accept" && document.getElementById("reject").checked==true){
            document.getElementById("reject").click();
        }
    }
    if (document.getElementById("reject").checked==true) document.getElementById("textarea").style.display='block';
    if (document.getElementById("accept").checked==true) document.getElementById("textarea").style.display='none';
    if (document.getElementById("reject").checked==false) document.getElementById("textarea").style.display='none';
    if (document.getElementById("reject").checked==true) document.getElementById("selectmentor").disabled = true;
    if (document.getElementById("reject").checked==false) document.getElementById("selectmentor").disabled = false;



}
</script>