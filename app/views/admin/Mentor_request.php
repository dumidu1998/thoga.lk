<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Requests</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/application.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
	<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">



</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>Request for Mentor</h1>
    <center><h2>ID - <?php printf('%03d',  $alldetails['farmer_id']); ?></h2></center>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/farmer.png" alt="" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
            <span><h3><u>Farmer's Details</u></h3></span>
            <tr>
                <td>Farmer Id:</td>
                <td><?php echo $alldetails['farmer_id'];?></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><?php echo $alldetails['firstname']." ".$alldetails['lastname'];?></td>
            </tr>
            <tr>
                <td >Address:</td>
                <td><?php echo $alldetails['address_line1'];?></td>
            </tr>
            <!-- <tr>
                <td> </td>
                <td><?php echo $alldetails['address_line2'];?></td>
            </tr> -->
            <tr>
                <td> </td>
                <td><?php echo $alldetails['city'];?></td>
            </tr>
            <tr>
                <td> </td>
                <td><?php echo $alldetails['district'];?></td>
            </tr>
            <tr>
                <td>Contact No.1:</td>
                <td><?php printf("%s - %s %s %s",substr($alldetails['contactno1'], 0, 3), substr($alldetails['contactno1'], 3, 3), substr($alldetails['contactno1'], 6,2), substr($alldetails['contactno1'], 8)); ?></td>
            </tr>
            <input type="hidden" id="contactno" value="<?php echo $alldetails['contactno1'];?>">
            <!-- <tr>
                <td>Contact No.2:</td>
                <td><?php //printf("%s - %s %s %s",substr($alldetails['contactno2'], 0, 3), substr($alldetails['contactno2'], 3, 3), substr($alldetails['contactno2'], 6,2), substr($alldetails['contactno2'], 8)); ?></td>
            </tr> -->
            <tr>
                <td>NIC</td>
                <td>982790182 V</td>
            </tr>
            
        </table>    
    </div>
</div>
<div class="selectcontainer">
    
    <form action="assignmentor" method="post" onsubmit="sendotp()">
    <input type="hidden" name="farmer_id" value="<?php echo $alldetails['farmer_id'];?>">
    <h1>Select a Mentor</h1>
    <h3>Select mentor from suggestion list</h3>
    <select name="mentor_id" id="selectmentor" class="select-css" required>
        <option value="0" selected disabled hidden>Select a mentor (Name - City - No.of farmers)</option>
    <?php foreach($mentors as $keys => $row){?>
        <option value="<?php echo $row['mentor_id'];?>"><?php echo $row['firstname']." ".$row['lastname'];?> - <?php echo $row['city'];?> (<?php echo $row['farmer_count'];?>)</option>
    <?php }?>
    </select>
    <div class="">

    </div>
</div>

    <div class="Bcontainer">
        <h1>Accept or Reject</h1>
        <br>
        <label class="CBcontainer">&nbsp Accept
            <input type="checkbox" name="accpted" id="accept" onchange="checkfunc(this.id)" >
            <span class="checkmark"></span>
        </label>
        <label class="CBcontainer">&nbsp Snooze
            <input type="checkbox" id="reject" name="rejected" onchange="checkfunc(this.id)" >
            <span class="checkmarkreject"></span>
        </label>
        <input list="reasons" name="reason" id="textarea" placeholder="Reason (required)" class="description" style="display:none;margin-left:30%;width:30%"/>
        <datalist id="reasons">
            <option value="We are Currently unavailable for mentor your area! We will assign u soon!">
            <option value="Our mentors are full with Farmers. We will assign you a mentor soon once a new mentor added!">
            <!-- <option value="Sorry Your vehicle is not with our Standards to add our delivery fleet!"> -->
        </datalist>

        <!-- <textarea name="reason" id="textarea" class="description" cols="40" rows="6" placeholder="Reason for Rejection" style="display:none;margin-left:30%" ></textarea> -->
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

function sendotp(){
    var reject = document.getElementById("reject").checked;
    
    if(reject){

        var contact = document.getElementById("contactno").value;
        var msg = "This is From thoga.lk admin panel. ";
        msg+=document.getElementById("textarea").value;
        console.log(contact);
        console.log(msg);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // var out = JSON.parse(this.responseText);
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "sendotp?contact1=" + contact+"&msg="+msg, true);
        xhttp.send();

    }

}
</script>