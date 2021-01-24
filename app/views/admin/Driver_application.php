<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Application</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/application.css">
</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>Driver Application</h1>
    <center><h2>ID - <?php printf('%03d',  $id); ?></h2></center>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/drivericon.jpg" alt="Default Image" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
            <tr>
                <td>First Name:</td>
                <td><?php echo $basic[0]['firstname'] ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $basic[0]['lastname'] ?></td>
            </tr>
            <tr>
                <td >Address:</td>
                <td><?php echo $basic[0]['address_line1'] ?></td>

            </tr>
            <tr>
                <td> </td>
                <td><?php echo $basic[0]['address_line2'] ?></td>
            </tr>
            <tr>
                <td> </td>
                <td><?php echo $basic[0]['city'] ?></td>
            </tr>
            <tr>
                <td> </td>
                <td><?php echo $basic[0]['district'] ?></td>
            </tr>
            <tr>
                <td> </td>
                <td><?php echo $basic[0]['zip_code'] ?></td>
            </tr>
            <tr>
                <td>Contact No.1:</td>
                <td><?php printf("%s - %s %s %s",substr($basic[0]['contactno1'], 0, 3), substr($basic[0]['contactno1'], 3, 3), substr($basic[0]['contactno1'], 6,2), substr($basic[0]['contactno1'], 8)); ?></td>
            </tr>
            <tr>
                <td>Contact No.2:</td>
                <td><?php printf("%s - %s %s %s",substr($basic[0]['contactno2'], 0, 3), substr($basic[0]['contactno2'], 3, 3), substr($basic[0]['contactno2'], 6,2), substr($basic[0]['contactno2'], 8)); ?></td>
            </tr>
            <tr>
                <td>NIC</td>
                <td><?php echo $basic[0]['NIC']  ?></td>
            </tr>
            
        </table>    
    </div>
</div>
<div class="listp2">
    <div>
    <table style="float:left;margin-bottom:50px">
        <tr>
            <td>E - mail</td>
            <td><?php echo $basic[0]['email']  ?></td>
        </tr>
        <tr>
            <td>Home Province</td>
            <td><?php echo $basic[0]['province']  ?></td>
        </tr>
        <tr>
            <td>Home-town</td>
            <td><?php echo $basic[0]['HT']  ?></td>
        </tr>
        <tr>
            <td>Nearest City 1</td>
            <td><?php echo $basic[0]['NS1']  ?></td>
        </tr>
        <tr>
            <td>Nearest City 2</td>
            <td><?php echo $basic[0]['NS2']  ?></td>
        </tr>
    </table>
   
    <table style="float:left;" class="t2">
        <tr>
            <td>DL No</td>
            <td><?php echo $vehicle[0]['license_no']  ?></td>
        </tr>
        <tr>
            <td>Vehicle Model</td>
            <td><?php echo $vehicle[0]['vehicle_type']  ?></td>
        </tr>
        <tr>
            <td>Vehicle Number</td>
            <td><?php echo $vehicle[0]['vehicle_no']  ?></td>
        </tr>
        <tr>
            <td>Cost / km</td>
            <td>Rs. <?php echo $vehicle[0]['cost_km']  ?></td>
        </tr>
        <tr>
            <td>Max Weight</td>
            <td><?php echo $vehicle[0]['maximum_weight']  ?> kg</td>
        </tr>
    </table>
</div>
</div>
<div class="docscontainer">
    
    <!--documents-->
    <h1>Submitted Documents</h1>
    <div class="docs">
        <table style="width:100%">
            <tr>
                <td>Driving License - Front</td>
                <td><a href="/thoga.lk/public/uploads/driveruploads/<?php echo $id;?>_DLF.jpg" target="_blank" >DLF <?php printf('%03d',  $id);?></a></td>
            </tr>
            <tr>
                <td>Driving License - Back</td>
                <td><a href="/thoga.lk/public/uploads/driveruploads/<?php echo $id;?>_DLB.jpg" target="_blank" >DLB <?php printf('%03d',  $id);?></a></td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td><a href="/thoga.lk/public/uploads/driveruploads/<?php echo $id;?>_V.jpg" target="_blank" >V <?php printf('%03d',  $id);?></a></td>
            </tr>
            <tr>
                <td>Revenue License</td>
                <td><a href="/thoga.lk/public/uploads/driveruploads/<?php echo $id;?>_RL.jpg" target="_blank" >RL <?php printf('%03d',  $id);?></a></td>
            </tr>
        </table>
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


}
</script>