<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User #<?php echo $_GET['uid'];?> Profile</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/application.css">
    <link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

</head>
<body>
<?php 
 include("navbar.php"); 
 $user=$userdetails['user_type'];
 ?>

<div class="container">
    <h1>User Profile </h1>
    <center><h2>ID - <?php printf('%03d',$_GET['uid']);?> </h2></center>
    <?php if($userdetails['usertype_id']==100){
        echo "<center style='color:red'><h2>Blocked User!</h2></center>";
        echo "<center><h2>".ucfirst($user)."</h2></center>";
    }else echo "<center><h2>".ucfirst($user)."</h2></center>";?>
    <?php if(isset($typedetails['verified_state']) && $typedetails['verified_state']==0 && $typedetails['reject_reason']!=''){
            echo "<center style='color:red'><h2>Rejected Mentor!</h2></center>";
        }
        ?>
    <div>
        <form action="profileaction" method="post" id="theForm">
            <input type="hidden" name="id" value="<?php echo $_GET['uid'];?>" >
            <input type="hidden" id="actionn" name="action" value="" >
            <input type="hidden" id="pwd" name="pwd" value="" >
            <button type="button" id="a" class="Criticalbtn" onclick="actiona(this)" name="rstpwd">Reset Password</button>
            <button type="button" class="Criticalbtn" onclick="actiona(this)" name="deleteuser">Delete User</button>
            <!-- <button type="button" class="Criticalbtn" onclick="actiona(this)" name="block">Block</button> -->
        </form>
    </div>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/drivericon.jpg" alt="" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
            <tr>
                <td>Username:</td>
                <td><?php echo $userdetails['username'];?></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><?php echo $userdetails['firstname'];?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $userdetails['lastname'];?></td>
            </tr>
            <tr>
                <td >Address:</td>
                <td><?php echo $userdetails['address_line1'];?></td>

            </tr>
            <!-- <tr>
                <td> </td>
                <td><?php echo $userdetails['address_line2'];?></td>
            </tr> -->
            <tr>
                <td> </td>
                <td><?php echo $userdetails['c_name'];?></td>
            </tr>
            <tr>
                <td> </td>
                <td><?php echo $userdetails['zip_code'];?></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><?php echo $userdetails['d_name'];?></td>
            </tr>
            <tr>
                <td>Contact No.1:</td>
                <td><?php printf("%s - %s %s %s",substr($userdetails['contactno1'], 0, 3), substr($userdetails['contactno1'], 3, 3), substr($userdetails['contactno1'], 6,2), substr($userdetails['contactno1'], 8)); ?></td>
            </tr>
            <!-- <tr>
                <td>Contact No.2:</td>
                <td><?php printf("%s - %s %s %s",substr($userdetails['contactno2'], 0, 3), substr($userdetails['contactno2'], 3, 3), substr($userdetails['contactno2'], 6,2), substr($userdetails['contactno2'], 8)); ?></td>
            </tr> -->
            <tr>
                <td>NIC</td>
                <td><?php echo $userdetails['NIC'];?></td>
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
            <td><?php echo $userdetails['email'];?></td>
        </tr>
        <tr>
            <td>Home Province</td>
            <td><?php echo $userdetails['p_name'];?></td>
        </tr>
        <tr>
            <td>Home-town</td>
            <td><?php echo $userdetails['c_name'];?></td>
        </tr>
        <tr>
            <td>Nearest City 1</td>
            <td><?php echo $userdetails['NC1'];?></td>
        </tr>
        <tr>
            <td>Nearest City 2</td>
            <td><?php echo $userdetails['NC2'];?></td>
        </tr>
    </table>

    <table style="float:left;margin-bottom:50px;" class="hide <?php if($user=='buyer') echo "show"; ?>" >
        <tr>
            <td>BR No</td>
            <td><?php echo $typedetails['br_no'];?></td>
        </tr>
        <tr>
            <td>Business Name</td>
            <td><?php echo $typedetails['b_name'];?></td>
        </tr>
    </table>


    <table style="float:left;margin-bottom:50px;display:" class='hide <?php if($user=='farmer') echo "show"; ?>'>
        <tr>
            <td>Farmer's ID</td>
            <td><?php echo $typedetails["farmer's_idNo"];?></td>
        </tr>
        <tr>
            <td>Farm Name</td>
            <td><?php echo $typedetails['farm_name'];?></td>
        </tr>
        <tr>
            <td>Mentor id</td>
            <td><?php echo $typedetails['mentor_id'];?></td>
        </tr>
    </table>

    <table style="float:left;margin-bottom:50px;" class="hide <?php if($user=='mentor') echo "show"; ?>">
        <tr>
            <td>Why</td>
            <td><?php echo $typedetails['why'];?></td>
        </tr>
        <tr>
            <td>Skills</td>
            <td><?php echo $typedetails['Skills'];?></td>
        </tr>
        <?php if(isset($typedetails['verified_state'],$typedetails['reject_reason']) && $typedetails['verified_state']==0 && $typedetails['reject_reason']!=''){
            echo "<tr>
            <td>Rejected Reason</td>
            <td>".$typedetails['Skills']."</td>
        </tr>";
        }
        ?>
    </table>
   
    <table style="float:left;" class="t2 hide <?php if($user=='driver') echo "show"; ?>">
        <tr>
            <td>DL No</td>
            <td><?php echo $typedetails['license_no'];?></td>
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

function actiona(btn){
    var x =btn.name;
    document.getElementById('actionn').value=x;
    var pwd=prompt("please type your password to continue.....");
    if(pwd!=null){
        document.getElementById('pwd').value=pwd;
        document.getElementById('theForm').submit();
    }
}
</script>