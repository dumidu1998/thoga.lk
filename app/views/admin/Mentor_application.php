<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Application</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/application.css">
	<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>Mentor Application</h1>
    <center><h2>ID - <?php printf('%03d',  $all['mentor_id']); ?></h2></center>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/mentoricon.png" alt="" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
            <tr>
                <td>First Name:</td>
                <td><?php echo $all['firstname'] ;?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $all['lastname'] ;?></td>
            </tr>
            <tr>
                <td >Address:</td>
                <td><?php echo $all['address_line1'] ;?></td>

            </tr>
            <tr>
                <td> </td>
                <td><?php echo $all['city'] ;?></td>
            </tr>
            <tr>
                <td> </td>
                <td><?php echo $all['district'] ;?></td>
            </tr>
            <tr>
                <td>Contact No.1:</td>
                <td><?php printf("%s - %s %s %s",substr($all['contactno1'], 0, 3), substr($all['contactno1'], 3, 3), substr($all['contactno1'], 6,2), substr($all['contactno1'], 8)); ?></td>
            </tr>
            <!-- <tr>
                <td>Contact No.2:</td>
                <td><?php 
                // printf("%s - %s %s %s",substr($all['contactno2'], 0, 3), substr($all['contactno2'], 3, 3), substr($all['contactno2'], 6,2), substr($all['contactno2'], 8)); ?></td>
            </tr> -->
            <input type="hidden" id="contactno" value="<?php echo $all['contactno1'];?>">

            <tr>
                <td>NIC</td>
                <td><?php echo $all['NIC'] ;?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo $all['email'] ;?></td>
            </tr>
            <tr>
                <td>Home-town</td>
                <td><?php echo $all['HT'] ;?></td>
            </tr>
            <tr>
                <td>Nearest City 1</td>
                <td><?php echo $all['NS1'] ;?></td>
            </tr>
            <tr>
                <td>Nearest City 2</td>
                <td><?php echo $all['NS2'] ;?></td>
            </tr>
        </table>    
    </div>
</div>
<br><br>
<div>
<center>
    <table style="font-size:20px">
        <tr>
            <td>Skills : </td>
            <td><?php echo $all['Skills'] ;?></td>
        </tr>
        <tr>
            <td>Why am I suit for mentoring : </td>
            <td><?php echo $all['why'] ;?></td>
        </tr>
    </table>
</center>
</div>
    <div class="Bcontainer">
        <h1>Accept or Reject</h1>
        <br>
        <form action="acceptmentor" method="post" onsubmit="sendotp()">
            <input type="hidden" name="mentor_id" value="<?php echo $all['mentor_id'];?>">
        <label class="CBcontainer">&nbsp Accept
            <input type="checkbox" name="accpted" id="accept" onchange="checkfunc(this.id)" >
            <span class="checkmark"></span>
        </label>
        <label class="CBcontainer">&nbsp Reject
            <input type="checkbox" id="reject" name="rejected" onchange="checkfunc(this.id)" >
            <span class="checkmarkreject"></span>
        </label>
        <input list="reasons" name="reason" id="textarea" placeholder="Reason for Rejection (required)" class="description" style="display:none;margin-left:30%;width:30%"/>
        <datalist id="reasons">
            <option value="Data Are inccurate. Please signup again with clear details!">
            <option value="Sorry You are not fit for our mentor team!">
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

    }else{
        var contact = document.getElementById("contactno").value;
        var msg = "This is From thoga.lk admin panel. Your application accepted! Now you can log in with your credentials!";
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