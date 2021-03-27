<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/application.css">
</head>
<body>
<?php 
 include("navbar.php"); 
 $user="driver";
 ?>

<div class="container">
    <h1>User Profile </h1>
    <center><h2>ID - 17 </h2></center>
    <center><h2><?php echo ucfirst($user) ?> </h2></center>
    <div>
        <button class="Criticalbtn">Reset Password </button>
        <button class="Criticalbtn">Delete User</button>
        <button class="Criticalbtn">Block</button>
    </div>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/drivericon.jpg" alt="" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
            <tr>
                <td>Username:</td>
                <td>Manthila</td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td>Manthila</td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>Bandara</td>
            </tr>
            <tr>
                <td >Address:</td>
                <td>No. 15</td>

            </tr>
            <tr>
                <td> </td>
                <td>Galle Road</td>
            </tr>
            <tr>
                <td> </td>
                <td>Ambalangoda</td>
            </tr>
            <tr>
                <td> </td>
                <td>80300</td>
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
            <tr>
                <td>Password</td>
                <td>***********</td>
            </tr>
            
        </table>    
    </div>
</div>
<div class="listp2">
    <div>
    <table style="float:left;margin-bottom:50px;" >
        <tr>
            <td>E - mail</td>
            <td>lacd@gmail.com</td>
        </tr>
        <tr>
            <td>Home Province</td>
            <td>Southern</td>
        </tr>
        <tr>
            <td>Home-town</td>
            <td>Ambalangoda</td>
        </tr>
        <tr>
            <td>Nearest City 1</td>
            <td>Balapitiya</td>
        </tr>
        <tr>
            <td>Nearest City 2</td>
            <td>Lenaduwa</td>
        </tr>
    </table>

    <table style="float:left;margin-bottom:50px;" class="hide <?php if($user=='buyer') echo "show"; ?>" >
        <tr>
            <td>BR No</td>
            <td>17546109</td>
        </tr>
        <tr>
            <td>Business Name</td>
            <td>Infini Solution</td>
        </tr>
    </table>


    <table style="float:left;margin-bottom:50px;display:" class='hide <?php if($user=='farmer') echo "show"; ?>'>
        <tr>
            <td>Farmer's ID</td>
            <td>171546109</td>
        </tr>
        <tr>
            <td>Farm Name</td>
            <td>-</td>
        </tr>
    </table>

    <table style="float:left;margin-bottom:50px;" class="hide <?php if($user=='mentor') echo "show"; ?>">
        <tr>
            <td>Why</td>
            <td>I would like to help farmers</td>
        </tr>
        <tr>
            <td>Skills</td>
            <td>Leadership</td>
        </tr>
    </table>
   
    <table style="float:left;" class="t2 hide <?php if($user=='driver') echo "show"; ?>">
        <tr>
            <td>DL No</td>
            <td>17546109</td>
        </tr>
        <tr>
            <td>Vehicle Model</td>
            <td>Dimo Batta</td>
        </tr>
        <tr>
            <td>Vehicle Number</td>
            <td>NC - KT 0246</td>
        </tr>
        <tr>
            <td>Cost / km</td>
            <td>Rs. 60.00</td>
        </tr>
        <tr>
            <td>Max Weight</td>
            <td>1000 kg</td>
        </tr>
    </table>
</div>
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
function goback(){
            window.history.back();
        }
</script>