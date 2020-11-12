<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/adminindexstyle.css">
</head>
  
<body style="margin-top:100px;background-image: url(/thoga.lk/public/images/admin/a.jpg); background-repeat:repeat"  onload="numberAnimation()">
    <?php include("navbar.php"); ?>
    <div class="buttonContainer">
        <a href="#"><button class="admin-btn" >View Orders</button></a>
        <a href="#"><button class="admin-btn" >Manage Users</button></a>
        <a href="#"><button class="admin-btn" >Manage Advertisements</button></a>

    </div>
    <div class="ut-hr-txt">
        <hr><span>30 Days Summary</span>
    </div>
    <div class="statcontainer" style="margin-top:30px">
    
        <div class="statcard">
        <div class="card-title"> <img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/usericon.png" alt=""> Users</div>
        <div class="card-content" ><span class="cardd"  data-end-value="500" data-increment="1" data-duration="1000">10</span></div>
        </div>

        <div class="statcard">
        <div class="card-title"> <img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/ordicon.png" alt=""> Orders</div>
        <div class="card-content">7,500</div>
        </div>

        <div class="statcard">
        <div class="card-title"><img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/salesicon.png" alt=""> Sales</div>
            <div class="card-content">Rs. 7,500</div>

        </div>
        <div class="statcard">
        <div class="card-title"><img class="cardimg" width= 40px height=35px src="/thoga.lk/public/images/admin/tsalesicon.png" alt=""> Today Sales**</div>
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
                <tr>
                <td data-label="Mentor ID">001</td>
                <td data-label="District">Anuradhapura</td>
                <td data-label="Request Date">2020/10/10</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
                <tr>
                <td data-label="Mentor ID">002</td>
                <td data-label="District">Kandy</td>
                <td data-label="Request Date">2020/10/01</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
                <tr>
                <td data-label="Mentor ID">003</td>
                <td data-label="District">Jaffna</td>
                <td data-label="Request Date">2020/10/02</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
                <tr>
                <td data-label="Mentor ID">004</td>
                <td data-label="District">Haputhale</td>
                <td data-label="Request Date">2020/09/30</td>
                <td data-label="Action"><a href="#"> View More</a></td>
                </tr>
            </tbody>
        </table>

    </div>

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
                <td data-label="Action"><a href="#">Assign Mentor</a></td>
                </tr>
                <tr>
                <td data-label="Farmer Name">K.D. Bandara</td>
                <td data-label="District">Batticola</td>
                <td data-label="City">Pasikuda</td>
                <td data-label="Action"><a href="#">Assign Mentor</a></td>
                </tr>
                <tr>
                <td data-label="Farmer Name">A.S. Kumara</td>
                <td data-label="District">Vavniya</td>
                <td data-label="City">Punewa</td>
                <td data-label="Action"><a href="#">Assign Mentor</a></td>
                </tr>
                <tr>
                <td data-label="Farmer Name">S.S. Ariyapala</td>
                <td data-label="District">Galle</td>
                <td data-label="City ">Matara</td>
                <td data-label="Action"><a href="#">Assign Mentor</a></td>
                </tr>
            </tbody>
        </table>

    </div>
    

</body> 
<script>
    document.querySelectorAll(".cardd").forEach( (el) => {
    const endValue = el.getAttribute('data-end-value');
    const incrementValue = el.getAttribute('data-increment');
    const durationValue = el.getAttribute('data-duration');
  
    if (endValue) numberAnimation(el, endValue, incrementValue, durationValue);
  
    function numberAnimation(el, endValue, incrementor, duration) {
          //alert(endValue);

    anime({
    targets: el,
    textContent: endValue,
    round: incrementor ? 1/incrementor : 1/5,
    easing: 'easeInOutQuad',
    duration: duration ? duration : 4000,
  });
}
});
</script>
</html>