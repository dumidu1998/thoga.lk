<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/adminindexstyle.css">
</head>
  
<body style="margin-top:100px;background-image: url(/thoga.lk/public/images/admin/a.jpg); background-repeat:repeat;margin-top:120px"  >
    <?php include("navbar.php");?>
    <div  class="addnewcont"><a href="/thoga.lk/admin/showadmin"><button class="addnewbtn">Add New Admin</button></a></div>
    
    <div class="buttonContainer">
        <a href="admin/vieworders"><button class="admin-btn" >View Orders</button></a>
        <a href="admin/usermanager"><button class="admin-btn" >Manage Users</button></a>
        <a href="admin/admanager"><button class="admin-btn" >Manage Advertisements</button></a>

    </div>
    <div class="ut-hr-txt">
        <hr><span>30 Days Summary</span>
    </div>
    <div class="statcontainer" style="margin-top:30px">
    
        <div class="statcard">
        <div class="card-title"> <img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/usericon.png" alt=""> Users</div>
        <div class="card-content" id="count1"><?php echo number_format(100);?></div>
        </div>

        <div class="statcard">
        <div class="card-title"> <img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/ordicon.png" alt=""> Orders</div>
        <div class="card-content" id="count2"><?php echo number_format(80);?></div>
        </div>

        <div class="statcard">
        <div class="card-title"><img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/salesicon.png" alt=""> Sales</div>
            <div class="card-content">Rs. <span id="count3"><?php echo number_format(235000);?></div>

        </div>
        <div class="statcard">
        <div class="card-title-big"><img class="cardimg" width= 40px height=40px src="/thoga.lk/public/images/admin/tsalesicon.png" alt="" > Today Sales**</div>
        <span id="dapplications"></span>
        <div class="card-content">Rs. <span id="count4"><?php echo number_format(9500);?></span></div>

        </div>
    </div>
    <div>
        <table>
        <div class="ut-hr-txt">
            <hr ><span>Driver Applications</span>
        </div>
            <thead>
                <tr>
                <th >Driver ID</th>
                <th >Driver Name</th>
                <th >District</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($results as $keys => $row){
                        $driver_id=$row['driver_id'];
                        $name=$row['firstname'] ." ". $row['lastname'] ;
                        $district=$row['name_en'];
                        
                ?>
                <tr>
                <td data-label="Driver ID"><?php printf('%03d', $driver_id) ?></td>
                <td data-label="Driver Name"><?php echo $name; ?></td>
                <td data-label="District"><?php echo $district; ?></td>
                <td data-label="Action"><a href="admin/dappl?id=<?php echo $driver_id;?>" > View More</a></td>
                </tr>
                <?php } ?>
            </tbody>
            <span id="mapplications"></span>
        </table>

    </div>

    <div>
        <table>
        <div class="ut-hr-txt">
            <hr><span>Mentor Applications</span>
        </div>
            <thead>
                <tr>
                <th >Mentor ID</th>
                <th >District</th>
                <th >Request Date</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($mentors as $keys => $row){
                        $mentor_id=$row['mentor_id'];
                        $date=$row['date'];
                        $district=$row['name_en'];
                        
                ?>
                <tr>
                <td data-label="Mentor ID"><?php printf('%03d', $mentor_id) ?></td>
                <td data-label="District"><?php echo $district; ?></td>
                <td data-label="Request Date"><?php echo $date; ?></td>
                <td data-label="Action"><a href="admin/mappl?id=<?php echo $mentor_id;?>"> View More</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <span id="mrequests"></span>

    <div>
        <table>
        <div class="ut-hr-txt">
            <hr><span>Mentor Requests</span>
        </div>
            <thead>
                <tr>
                <th >Farmer Name</th>
                <th >District</th>
                <th >City</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td data-label="Farmer Name">A.D. Rathnayaka</td>
                <td data-label="District">Ampara</td>
                <td data-label="City">Kattankudi</td>
                <td data-label="Action"><a href="admin/mrequest">Assign Mentor</a></td>
                </tr>
                <tr>
                <td data-label="Farmer Name">K.D. Bandara</td>
                <td data-label="District">Batticola</td>
                <td data-label="City">Pasikuda</td>
                <td data-label="Action"><a href="admin/mrequest">Assign Mentor</a></td>
                </tr>
                <tr>
                <td data-label="Farmer Name">A.S. Kumara</td>
                <td data-label="District">Vavniya</td>
                <td data-label="City">Punewa</td>
                <td data-label="Action"><a href="admin/mrequest">Assign Mentor</a></td>
                </tr>
                <tr>
                <td data-label="Farmer Name">S.S. Ariyapala</td>
                <td data-label="District">Galle</td>
                <td data-label="City ">Matara</td>
                <td data-label="Action"><a href="admin/mrequest">Assign Mentor</a></td>
                </tr>
            </tbody>
        </table>

    </div>
    

</body> 
</html>