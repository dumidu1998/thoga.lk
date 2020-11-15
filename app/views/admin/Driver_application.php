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
    <center><h2>ID - 17</h2></center>
    <div class="grid">
        <div class="grid-item0">
            <img src="/thoga.lk/public/images/buyer/icons/drivericon.jpg" alt="" class="image" >
        </div>
    <div class="grid-item1">
        <table style="width:100%;border-collapse: collapse;" >
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
            
        </table>    
    </div>
</div>
<div class="listp2">
    <div>
    <table style="float:left;margin-bottom:50px">
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
   
    <table style="float:left;" class="t2">
        <tr>
            <td>E - mail</td>
            <td>lacd@gmail.com</td>
        </tr>
        <tr>
            <td>DL No</td>
            <td>17546109</td>
        </tr>
        <!-- <tr>
            <td>Nearest City 1</td>
            <td>Anuradhapura</td>
        </tr>
        <tr>
            <td>Nearest City 2</td>
            <td>Dambulla</td>
        </tr> -->
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
                <td><a href="#" target="_blank" >DLF 0017</a></td>
            </tr>
            <tr>
                <td>Driving License - Back</td>
                <td><a href="#" target="_blank" >DLB 0017</a></td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td><a href="#" target="_blank" >V 017</a></td>
            </tr>
            <tr>
                <td>Revenue License</td>
                <td><a href="#" target="_blank" >RL 017</a></td>
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