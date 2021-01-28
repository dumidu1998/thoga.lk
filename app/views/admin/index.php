<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/adminindexstyle.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="/thoga.lk/public/js/chart.js"></script>
</head>
  
<body style="margin-top:100px;background-image: url(/thoga.lk/public/images/admin/a.jpg); background-repeat:repeat;margin-top:120px"  >
    <?php include("navbar.php");?>

    <div class="top_grid">
        <div class="top_grid_item">
            <a href="admin/vieworders"><button class="admin-btn" >View Orders</button></a>
            <a href="admin/usermanager"><button class="admin-btn" >Manage Users</button></a>
            <a href="admin/admanager"><button class="admin-btn" >Manage Advertisements</button></a>
            <a href="/thoga.lk/admin/showadmin"><button class="admin-btn">Add New Admin</button></a>
            <a href="/thoga.lk/admin/vegetables"><button class="admin-btn">Vegetable List</button></a>

        </div>

        <div class="top_grid_item">
            <div class="ut-hr-txt">
                <hr><span>30 Days Summary</span>
            </div>
            <div class="infotable">
                <table>
                    <tr class="tablehead">
                        <th>        <div class="card-title"> <img class="cardimg" width= 30px height=25px src="/thoga.lk/public/images/admin/usericon.png" alt=""> Users</div></th>
                        <th>        <div class="card-title"> <img class="cardimg" width= 30px height=25px src="/thoga.lk/public/images/admin/ordicon.png" alt=""> Orders</div></th>
                        <th>        <div class="card-title"><img class="cardimg" width= 30px height=25px src="/thoga.lk/public/images/admin/salesicon.png" alt=""> Sales</div></th>
                        <th>         <div class="card-title-big"><img class="cardimg" width= 30px height=30px src="/thoga.lk/public/images/admin/tsalesicon.png" alt="" > Today Sales**</div></th>
                    </tr>
                    <tr style="font-size:30px">
                        <td>150</td>
                        <td>70</td>
                        <td>Rs. 1,700.00</td>
                        <td>Rs. 71,500.00</td>
                    </tr>
                </table>
            </div>
        </div>
    
    </div>
    <div id="curve_chart" style="width: 900px; height: 300px; margin:auto"></div>
    <div>
        <table class="maintables">
        <div class="ut-hr-txt">
            <hr ><span>Driver Applications</span><a name="dapplications"></a>
        </div>
            <thead >
                <tr class="tablehead">
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
        <table class="maintables">
        <div class="ut-hr-txt">
            <hr><span>Mentor Applications</span>
        </div>
            <thead>
                <tr  class="tablehead">
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
        <table class="maintables">
        <div class="ut-hr-txt">
            <hr><span>Mentor Requests</span>
        </div>
            <thead>
                <tr  class="tablehead">
                <th >Farmer Name</th>
                <th >District</th>
                <th >City</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($farmers as $keys => $row){
                        $farmer_id=$row['farmer_id'];
                        $name=$row['firstname'] ." ".$row['lastname'] ;
                        $city=$row['city'];
                        $district=$row['district'];
                ?>

                <tr>
                <td data-label="Farmer Name"><?php echo $name; ?></td>
                <td data-label="District"><?php echo $district; ?></td>
                <td data-label="City"><?php echo $city; ?></td>
                <td data-label="Action"><a href="admin/mrequest?id=<?php echo $farmer_id; ?>">Assign Mentor</a></td>
                </tr>

                <?php } ?>
                
            </tbody>
        </table>

    </div>
</body> 

    <script>
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales'],
                <?php
            foreach($ordersforchart as $keys => $row){
                echo "['".$row['count_date']."',".$row['counted_leads']."],";
            }

            ?>
            ]);

            var options = {
                title: 'Performance - Orders',
                curveType: 'none',
                legend: { position: 'bottom' },
                pointSize: 2,
                vAxis: {format: '0',minValue: 4,title: 'Orders'},
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }

    </script>

</html>
