
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="/thoga.lk/app/views/signup/style.css">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="padding: 20px">
<?php 
  print_r($cities);
  echo "<br>";
  foreach($cities as $key => $values){
    // print_r($values);
    echo $values['city_name'];
    // echo $values  ."<br>";
  }
?>
<img src="/thoga.lk/public/images/admin/logo thoga.png" alt="" class="logo" />
<h1 class="title">Sign Up</h1>
<div class="tabContainer">
    <div class="buttonContainer">
        <button onclick="showPanel(0,'#a9a9a9')">Buyer</button>
        <button onclick="showPanel(1,'#a9a9a9')">Farmer</button>
        <button onclick="showPanel(2,'#a9a9a9')">Driver</button>
        <button onclick="showPanel(3,'#a9a9a9')">Mentor</button>
    </div> 
    <div class="tabPanel">
      <form >
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="fn" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="ln"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="gender" class="inpbox"  name="gender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="dob" max="2002-01-01" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="nic" 
            pattern="^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[VX])$" 
            title="Format Should be 123123123V or 123123123X or 12312312312V" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="text" class="inpbox"  name="contactno1"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="text" class="inpbox"  name="contactno2" >
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="addressline1"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="addressline2">
        </div>
        <div class="grid"> <!--grid added-->
          <div class="row">
            <div class="lable1">City *</div>
              <select name="city" id="" class="inpbox" required>
                <option value="" hidden selected>Select your City</option>
                <?php
                  foreach($cities as $key => $values){
                    $city = $values['city_name'];
                ?> 
                <option value=<?php echo $city; ?>><?php echo $city; ?></option>
                <?php
                  }
                ?>
              </select>
          </div>
          <div class="row">
            <div class="lable2">Province *</div>
              <select id="province" class="inpbox"  name="province" style="font-size: 17px;" required>
                <option value="north">Nothern Province</option>
                <option value="northwest">North-Western Province</option>
                <option value="west">Western Province</option>
                <option value="uva">Uva Province</option>
                <option value="south">Southern Province</option>
                <option value="Sabaragamuwa">Sabaragamuwa Province</option>
                <option value="central">Central Province</option>
                <option value="eastern">Eastern Province</option>
                <option value="northcentral">North-Central Province</option>
                
              </select>
          </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="postalcode"  required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">If you have a Business</div>
        <div class="row">
          <div class="lable">Business Name</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">BR No.</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="agreement">
          <input type="checkbox" name="" id="" class="cbox">
          I have read and Agree to the follow <a href="#">User Agreement (Buyer)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>


    <div class="tabPanel">
      <form >
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="fn" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="ln"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="gender" class="inpbox"  name="gender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="dob" max="2002-01-01" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="nic" 
            pattern="^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[VX])$" 
            title="Format Should be 123123123V or 123123123X or 12312312312V" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="text" class="inpbox"  name="contactno1"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="text" class="inpbox"  name="contactno2" >
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="addressline1"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="addressline2">
        </div>
        <div class="grid"> <!--grid added-->
          <div class="row">
            <div class="lable1">City *</div>
              <input type="text" class="inpbox"  name="city"  required>
          </div>
          <div class="row">
            <div class="lable2">Province *</div>
              <select id="province" class="inpbox"  name="province" style="font-size: 17px;" required>
                <option value="north">Nothern Province</option>
                <option value="northwest">North-Western Province</option>
                <option value="west">Western Province</option>
                <option value="uva">Uva Province</option>
                <option value="south">Southern Province</option>
                <option value="Sabaragamuwa">Sabaragamuwa Province</option>
                <option value="central">Central Province</option>
                <option value="eastern">Eastern Province</option>
                <option value="northcentral">North-Central Province</option>
                
              </select>
          </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="postalcode"  required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">If you are a registered farmer in Agriculture Department</div>
        <div class="row">
          <div class="lable">Farmer ID no.</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Farm Name(optional)</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="agreement">
          <input type="checkbox" name="" id="" class="cbox">
          I have read and Agree to the follow <a href="#">User Agreement (Farmer)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>



    <div class="tabPanel">
      <form enctype="multipart/form-data">
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="fn" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="ln"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="gender" class="inpbox"  name="gender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="dob" max="2002-01-01" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="nic" 
            pattern="^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[VX])$" 
            title="Format Should be 123123123V or 123123123X or 12312312312V" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="text" class="inpbox"  name="contactno1"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="text" class="inpbox"  name="contactno2" >
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="addressline1"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="addressline2">
        </div>
        <div class="grid"> <!--grid added-->
        <div class="row">
          <div class="lable1">City *</div>
            <input type="text" class="inpbox"  name="city"  required>
        </div>
        <div class="row">
          <div class="lable2">Province *</div>
            <select id="province" class="inpbox"  name="province" style="font-size: 17px;" required>
              <option value="north">Nothern Province</option>
              <option value="northwest">North-Western Province</option>
              <option value="west">Western Province</option>
              <option value="uva">Uva Province</option>
              <option value="south">Southern Province</option>
              <option value="Sabaragamuwa">Sabaragamuwa Province</option>
              <option value="central">Central Province</option>
              <option value="eastern">Eastern Province</option>
              <option value="northcentral">North-Central Province</option>
              
            </select>
        </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="postalcode"  required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Upload required Documents (jpg/jpeg/png)</div>
        <div class="row">
          <div class="lable">Driving License No.</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Photo of Driving License  </div>
          <div style="display:inline" class="inpbox">
            <input type="file" name="file1" id="file1" onchange="uploadFile()">
            <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
            <u id="status" style="font-size:10px"></u>
            <u id="loaded_n_total" style="font-size:10px"></u>
          </div>
        </div>
        <div class="row">
          <div class="lable">Photo of Driving License  </div>
          <div style="display:inline" class="inpbox">
            <input type="file" name="file1" id="file1" onchange="uploadFile()">
            <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
            <u id="status" style="font-size:10px"></u>
            <u id="loaded_n_total" style="font-size:10px"></u>
          </div>
        </div>
        <div class="row">
          <div class="lable">Photo of Driving License  </div>
          <div style="display:inline" class="inpbox">
            <input type="file" name="file1" id="file1" onchange="uploadFile()">
            <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
            <u id="status" style="font-size:10px"></u>
            <u id="loaded_n_total" style="font-size:10px"></u>
          </div>
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="agreement">
          Your account will activated within 24hrs. We will notify you with a SMS.<br>
          <input type="checkbox" name="" id="" class="cbox">
          I have read and Agree to the follow <a href="#">User Agreement (Driver)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>



    <div class="tabPanel">
    <form >
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="fn" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="ln"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="gender" class="inpbox"  name="gender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="dob" max="2002-01-01" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="nic" 
            pattern="^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[VX])$" 
            title="Format Should be 123123123V or 123123123X or 12312312312V" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="text" class="inpbox"  name="contactno1"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="text" class="inpbox"  name="contactno2" >
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="addressline1"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="addressline2">
        </div>
        <div class="row">
          <div class="lable">City *</div>
            <input type="text" class="inpbox"  name="city"  required>
        </div>
        <div class="row">
          <div class="lable">Province *</div>
            <select id="province" class="inpbox"  name="province" style="font-size: 17px;" required>
              <option value="north">Nothern Province</option>
              <option value="northwest">North-Western Province</option>
              <option value="west">Western Province</option>
              <option value="uva">Uva Province</option>
              <option value="south">Southern Province</option>
              <option value="Sabaragamuwa">Sabaragamuwa Province</option>
              <option value="central">Central Province</option>
              <option value="eastern">Eastern Province</option>
              <option value="northcentral">North-Central Province</option>
              
            </select>
        </div>
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="postalcode"  required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="desc">Explain in few words about you</div>
        <div class="row">
          <div class="lable">Why can I be a Mentor</div>
            <textarea name="" class="inpbox" id="" cols="10" rows="3"></textarea>
            <!-- <input type="text" class="inpbox"  name="email"  required> -->
        </div>
        <div class="row">
          <div class="lable">How Im going to mentor a Farmer</div>
          <textarea name="" class="inpbox" id="" cols="10" rows="3"></textarea>
            <!-- <input type="text" class="inpbox"  name="email"  required> -->
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox"  name="email"  required>
        </div>
        <div class="agreement">
          <input type="checkbox" name="" id="" class="cbox">
          I have read and Agree to the follow <a href="#">User Agreement (Mentor)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>
</div>

<script src="/thoga.lk/app/views/signup/script.js"></script>
</body>
</html>