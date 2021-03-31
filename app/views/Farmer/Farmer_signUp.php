<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="Farmer_signUp.css">
  <link rel="icon" type="image/x-icon" href="favicon.png">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="padding: 20px" background="index1.jpg">
<h1 class="title">Thoga.lk</h1>

<div class="tabContainer">
    <div class="buttonContainer">
        <button onclick="showPanel(0,'#a9a9a9')">Farmer</button>
        <button onclick="showPanel(1,'#a9a9a9')">Buyer</button>
        <button onclick="showPanel(2,'#a9a9a9')">Driver</button>
        <button onclick="showPanel(3,'#a9a9a9')">Mentor</button>
    </div> 
    <div class="tabPanel">
      <form >
        <div class="row">
          <div class="lable">First Name</div>
          <input type="text" class="inpbox" name="fn" required>
        </div>
        <div class="row">
          <div class="lable">Last Name</div>
            <input type="text" class="inpbox"  name="ln"  required>
        </div>
        <div class="row">
          <div class="lable">Gender</div>
            <select id="gender" class="inpbox"  name="gender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth</div>
            <input type="date" class="inpbox"  name="dob" max="2002-01-01" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number</div>
            <input type="text" class="inpbox"  name="nic" 
            pattern="^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[VX])$" 
            title="Format Should be 123123123V or 123123123X or 12312312312V" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1</div>
            <input type="text" class="inpbox"  name="contactno1"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="text" class="inpbox"  name="contactno2" >
        </div>
        <div class="row">
          <div class="lable">Address Line 1</div>
            <input type="text" class="inpbox"  name="addressline1"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="addressline2"  required>
        </div>
        <div class="row">
          <div class="lable">Email</div>
            <input type="text" class="inpbox"  name="email"  required>
        </div>
        <div class="row">
          <div class="lable">Province</div>
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
        
        
       <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
      </form>
    </div>
    
</div>
<script src="Farmer_signUp.js"></script>
</body>
</html>