<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-top:150px">
    <?php include("navbar.php"); ?>
    <div class="ut-hr-txt">
        <hr><span>30 Days Summary</span>
    </div>
    <div class="statcontainer" style="margin-top:30px">
        <div class="statcard">
        <div class="card-title">Website Visits</div>
        <div class="card-content">7,500</div>
        </div>
        <div class="statcard">
        <div class="card-title">Orders</div>
        <div class="card-content">7,500</div>
        </div>
        <div class="statcard">
        <div class="card-title">Sales</div>
            <div class="card-content">Rs. 7,500</div>

        </div>
        <div class="statcard">
        <div class="card-title">Today Sales**</div>
        <div class="card-content">Rs. 500</div>

        </div>
    </div>
    <div>
        <table>
        <div class="ut-hr-txt">
            <hr><span>Driver Applications</span>
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
                <tr>
                <td data-label="Driver ID">001</td>
                <td data-label="Driver Name">A.M. Rathnayake</td>
                <td data-label="District">Anuradhapura</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
                <tr>
                <td data-label="Driver ID">002</td>
                <td data-label="Driver Name">A.P. Ranathunga</td>
                <td data-label="District">Kandy</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
                <tr>
                <td data-label="Driver ID">003</td>
                <td data-label="Driver Name">D.K. Bandara</td>
                <td data-label="District">Jaffna</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
                <tr>
                <td data-label="Acount">005</td>
                <td data-label="Driver Name">M. Samantha</td>
                <td data-label="District">Matara</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
            </tbody>
        </table>

    </div>

</body> 
</html>