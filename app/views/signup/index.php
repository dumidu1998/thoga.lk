
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="/thoga.lk/app/views/signup/style.css">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="padding: 20px">
<?php
  //print_r($cities);
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
    <!-- Buyer -->
    <div class="tabPanel">
      <form method="POST" action="signup/buyer">
      <span style="font-size:13px;float:right;margin-right:3%">* Mandatory fields</span>
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="Bfn" placeholder="saman" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="Bln" placeholder="Bandara"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="Bgender" class="inpbox"  name="Bgender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="Bdob" max="2008-12-31" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="Bnic" 
            pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" placeholder="954560721V or 9496580258X or 1996123145012"
            title="Format Should be 123123123V or 123123123X or 1231231231231" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="tel" class="inpbox"  name="Bcontactno1" 
            pattern="^((?:\+94|94)|0)(\d{9})$" title="Format Should be 0766344989 or 766344989" placeholder="0766355989"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="tel" class="inpbox"  name="Bcontactno2" pattern="^((?:\+94|94)|0)(\d{9})$" 
            title="Format Should be 0766344989 or 766344989" placeholder="0766355989" >
        </div>
		    <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="Baddressline1" placeholder="No.155" required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox" placeholder="Nilwaththa Mawatha"  name="Baddressline2">
        </div>
        <div class="row">
          <div class="lable">Province *</div>
          <select class="js-example-responsive" name="Bprovince" id="BProvince" onchange="bselectvalidate1()" required>
          <option value="0"></option>
          <?php
                  foreach($provinces as $key => $values){
                    $province = $values['name_en'];
                    $provinceid = $values['id'];
                ?>
                <option class="dl" value="<?php echo $provinceid; ?>"><?php echo $province . " Province"; ?></option>
                <?php
                  }
                ?>
        </select>
        </div>
        <div class="grid"> <!--grid added-->
          <div class="row">
            <div class="lable1">District *</div>
            <select class="s2" name="Bdistrict" id="Bdistrict" onchange="bselectvalidate2()" required>
              <option value="0"></option>
                <?php
                  foreach($districts as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
          </div>
          <div class="row">
            <div class="lable2">City *</div>
            <select class="s2" name="Bcity" id="Bcity" onchange="bselectvalidate3()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
          </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="Bpostalcode" placeholder="50000"  required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="Bemail" placeholder="malika@gmail.com"  required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
          <select class="s2" name="BNcity1" id="Bncity1" onchange="bselectvalidate4()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city1 = $values['name_en'];
                    $cityid1 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid1; ?>"><?php echo $city1; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
          <select class="s2" name="BNcity2" id="Bncity2" onchange="bselectvalidate5()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city2 = $values['name_en'];
                    $cityid2 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid2; ?>"><?php echo $city2; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="desc">If you have a Business</div>
        <div class="row">
          <div class="lable">Business Name</div>
            <input type="text" class="inpbox"  name="Bussinessname"  >
        </div>
        <div class="row">
          <div class="lable">BR No.</div>
            <input type="text" class="inpbox"  name="BrNo"  >
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="BUname" pattern="^[a-z0-9_-]{4,16}$" title="Invalid username" 
            placeholder="Username with 4 to 16 characters" required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox" id="Bpwd"  name="Bpwd"  pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$"
            placeholder="minimum 8 characters and with Digits and Letters including Capital Letter" title="Should contain digits and letters" 
            onkeyup="pwdvalidatebuyer();buttonOnbuyer();"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox" id="Bcpwd" onkeyup="pwdvalidatebuyer();buttonOnbuyer();" name="Bconfirmpwd" placeholder="Retype Password"  required>
            <br><br><span id='Bmessage' style="padding-left:27%;font-size:13px;color:red;"></span>
        </div>
        <div class="agreement">
          <input type="checkbox" id="Bcbox" class="cbox" onClick="buttonOnbuyer()">
          I have read and Agree to the follow <a href="#">User Agreement (Buyer)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up" disabled id="Bsignupbtn">
        </div>
      </form>
    </div>

    <!-- Farmer -->
    <div class="tabPanel">
      <form method="POST" action="signup/farmer">
      <span style="font-size:13px;float:right;margin-right:3%">* Mandatory fields</span>
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="Ffn" placeholder="saman" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="Fln" placeholder="Bandara" required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="Fgender" class="inpbox"  name="Fgender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="Fdob" max="2008-12-31" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="Fnic" 
            pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" placeholder="954560721V or 9496580258X or 1996123145012"
            title="Format Should be 123123123V or 123123123X or 1231231231231" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="tel" class="inpbox"  name="Fcontactno1"
            pattern="^((?:\+94|94)|0)(\d{9})$" title="Format Should be 0766344989 or 766344989" placeholder="0766355989" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="tel" class="inpbox"  name="Fcontactno2" pattern="^((?:\+94|94)|0)(\d{9})$" 
            title="Format Should be 0766344989 or 766344989" placeholder="0766355989" >
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="Faddressline1" placeholder="No.155"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox" placeholder="Nilwaththa Mawatha" name="Faddressline2">
        </div>
        <div class="row">
          <div class="lable">Province *</div>
          <select class="js-example-responsive" name="Fprovince" id="FProvince" onchange="fselectvalidate1()" required>
          <option value="0"></option>
          <?php
                  foreach($provinces as $key => $values){
                    $province = $values['name_en'];
                    $provinceid = $values['id'];
                ?>
                <option class="dl" value="<?php echo $provinceid; ?>"><?php echo $province . " Province"; ?></option>
                <?php
                  }
                ?>
        </select>
        </div>
        <div class="grid"> <!--grid added-->
          <div class="row">
            <div class="lable1">District *</div>
            <select class="s2" name="Fdistrict" id="Fdistrict" onchange="fselectvalidate2()" required>
              <option value="0"></option>
                <?php
                  foreach($districts as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
            </div>
          <div class="row">
            <div class="lable2">City *</div>
            <select class="s2" name="Fcity" id="Fcity" onchange="fselectvalidate3()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
            </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="Fpostalcode" placeholder="50000" required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="Femail" placeholder="malika@gmail.com" required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <select class="s2" name="FNcity1" id="Fncity1" onchange="fselectvalidate4()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city1 = $values['name_en'];
                    $cityid1 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid1; ?>"><?php echo $city1; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
          <select class="s2" name="FNcity2" id="Fncity2" onchange="fselectvalidate5()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city2 = $values['name_en'];
                    $cityid2 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid2; ?>"><?php echo $city2; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="desc">If you are a registered farmer in Agriculture Department</div>
        <div class="row">
          <div class="lable">Farmer ID no.</div>
            <input type="text" class="inpbox"  name="Ffarmerid"  required>
        </div>
        <div class="row">
          <div class="lable">Farm Name(optional)</div>
            <input type="text" class="inpbox"  name="Ffarmname"  required>
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="Funame" pattern="^[a-z0-9_-]{4,16}$" title="Invalid username" 
            placeholder="Username with 4 to 16 characters" required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox"  name="Fpwd" id="Fpwd" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$"
            placeholder="minimum 8 characters and with Digits and Letters including Capital Letter" title="Should contain digits and letters" 
            onkeyup="pwdvalidatefarmer();buttonOnfarmer();"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox"  name="Fconfirmpwd" id="Fcpwd" onkeyup="pwdvalidatefarmer();buttonOnfarmer();" placeholder="Retype Password"  required>
            <br><br><span id='Fmessage' style="padding-left:27%;font-size:13px;color:red;"></span>
        </div>
        <div class="agreement">
          <input type="checkbox" id="Fcbox" class="cbox" onClick="buttonOnfarmer()">
          I have read and Agree to the follow <a href="#">User Agreement (Farmer)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up" disabled id="Fsignupbtn">
        </div>
      </form>
    </div>


        <!-- Driver -->
    <div class="tabPanel">
      <form method="POST" action="signup/driver" enctype="multipart/form-data">
      <span style="font-size:13px;float:right;margin-right:3%">* Mandatory fields</span>
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="Dfn" placeholder="saman" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="Dln" placeholder="Bandara"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="Dgender" class="inpbox"  name="Dgender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="Ddob" max="2008-12-31" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="Dnic" 
            pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" placeholder="954560721V or 9496580258X or 1996123145012"
            title="Format Should be 123123123V or 123123123X or 1231231231231" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="tel" class="inpbox"  name="Dcontactno1"   
            pattern="^((?:\+94|94)|0)(\d{9})$" title="Format Should be 0766344989 or 766344989" placeholder="0766355989"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="tel" class="inpbox"  name="Dcontactno2" pattern="^((?:\+94|94)|0)(\d{9})$" 
            title="Format Should be 0766344989 or 766344989" placeholder="0766355989">
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="Daddressline1" placeholder="No.155"  required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="Daddressline2" placeholder="Nilwaththa Mawatha">
        </div>
        <div class="row">
          <div class="lable">Province *</div>
          <select class="js-example-responsive" name="Dprovince" id="DProvince" onchange="dselectvalidate1()" required>
          <option value="0"></option>
          <?php
                  foreach($provinces as $key => $values){
                    $province = $values['name_en'];
                    $provinceid = $values['id'];
                ?>
                <option class="dl" value="<?php echo $provinceid; ?>"><?php echo $province . " Province"; ?></option>
                <?php
                  }
                ?>
        </select>
        </div>
        <div class="grid"> <!--grid added-->
        <div class="row">
          <div class="lable1">District *</div>
          <select class="s2" name="Ddistrict" id="Ddistrict" onchange="dselectvalidate2()" required>
              <option value="0"></option>
                <?php
                  foreach($districts as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="row">
          <div class="lable2">City *</div>
          <select class="s2" name="Dcity" id="Dcity" onchange="dselectvalidate3()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
          </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="Dpostalcode" placeholder="50000" required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="Demail" placeholder="malika@gmail.com" required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <select class="s2" name="DNcity1" id="Dncity1" onchange="dselectvalidate4()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city1 = $values['name_en'];
                    $cityid1 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid1; ?>"><?php echo $city1; ?></option>
                <?php
                  }
                ?>
            </select>
          </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
            <select class="s2" name="DNcity2" id="Dncity2" onchange="dselectvalidate5()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city2 = $values['name_en'];
                    $cityid2 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid2; ?>"><?php echo $city2; ?></option>
                <?php
                  }
                ?>
            </select>
          </div>
        <div class="desc">Upload required Documents (jpg/jpeg/png)</div>
        <div class="row">
          <div class="lable">Driving License No.</div>
            <input type="text" class="inpbox"  name="DLno"  required>
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
            <input type="file" name="file2" id="file2" onchange="uploadFile()">
            <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
            <u id="status" style="font-size:10px"></u>
            <u id="loaded_n_total" style="font-size:10px"></u>
          </div>
        </div>
        <div class="row">
          <div class="lable">Photo of Driving License  </div>
          <div style="display:inline" class="inpbox">
            <input type="file" name="file3" id="file3" onchange="uploadFile()">
            <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
            <u id="status" style="font-size:10px"></u>
            <u id="loaded_n_total" style="font-size:10px"></u>
          </div>
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="Duname" pattern="^[a-z0-9_-]{4,16}$" title="Invalid username" 
            placeholder="Username with 4 to 16 characters" required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox" id="Dpwd"  name="Dpwd" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$"
            placeholder="minimum 8 characters and with Digits and Letters including Capital Letter" title="Should contain digits and letters" 
            onkeyup="pwdvalidatedriver();buttonOndriver();"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox" id="Dcpwd"  name="Dcpwd" onkeyup="pwdvalidatedriver();buttonOndriver();" placeholder="Retype Password"  required>
            <br><br><span id='Dmessage' style="padding-left:27%;font-size:13px;color:red;"></span>
        </div>
        <div class="agreement">
          Your account will activated within 24hrs. We will notify you with a SMS.<br><br>
          <input type="checkbox"  id="Dcbox" class="cbox" onClick="buttonOndriver()">
          I have read and Agree to the follow <a href="#">User Agreement (Driver)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up" disabled id="Dsignupbtn">
        </div>
      </form>
    </div>


    <!-- Mentor -->
    <div class="tabPanel">
    <form method="POST" action="signup/buyer">
      <span style="font-size:13px;float:right;margin-right:3%">* Mandatory fields</span>
        <div class="row">
          <div class="lable">First Name *</div>
          <input type="text" class="inpbox" name="Mfn" placeholder="saman" required>
        </div>
        <div class="row">
          <div class="lable">Last Name *</div>
            <input type="text" class="inpbox"  name="Mln" placeholder="Bandara"  required>
        </div>
        <div class="row">
          <div class="lable">Gender *</div>
            <select id="Mgender" class="inpbox"  name="Mgender" style="font-size: 17px;" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="row">
          <div class="lable">Date of Birth *</div>
            <input type="date" class="inpbox"  name="Mdob" max="2008-12-31" required>
        </div>
        <div class="row">
          <div class="lable">NIC Number *</div>
            <input type="text" class="inpbox"  name="Mnic" 
            pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" placeholder="954560721V or 9496580258X or 1996123145012"
            title="Format Should be 123123123V or 123123123X or 1231231231231" required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 1 *</div>
            <input type="tel" class="inpbox"  name="Mcontactno1" 
            pattern="^((?:\+94|94)|0)(\d{9})$" title="Format Should be 0766344989 or 766344989" placeholder="0766355989"  required>
        </div>
        <div class="row">
          <div class="lable">Mobile Number 2</div>
            <input type="tel" class="inpbox"  name="Mcontactno2" pattern="^((?:\+94|94)|0)(\d{9})$" 
            title="Format Should be 0766344989 or 766344989" placeholder="0766355989">
        </div>
		        <div class="row">
          <div class="lable">Address Line 1*</div>
            <input type="text" class="inpbox"  name="Maddressline1" placeholder="No.155" required>
        </div>
        <div class="row">
          <div class="lable">Address Line 2</div>
            <input type="text" class="inpbox"  name="Maddressline2" placeholder="Nilwaththa Mawatha">
        </div>
        <div class="row">
          <div class="lable">Province *</div>
          <select class="js-example-responsive" name="Mprovince" id="MProvince" onchange="mselectvalidate1()" required>
          <option value="0"></option>
          <?php
                  foreach($provinces as $key => $values){
                    $province = $values['name_en'];
                    $provinceid = $values['id'];
                ?>
                <option class="dl" value="<?php echo $provinceid; ?>"><?php echo $province . " Province"; ?></option>
                <?php
                  }
                ?>
        </select>
        <div class="grid"> <!--grid added-->
        <div class="row">
          <div class="lable1">District *</div>
          <select class="s2" name="Mdistrict" id="Mdistrict" onchange="mselectvalidate2()" required>
              <option value="0"></option>
                <?php
                  foreach($districts as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
          </div>
        <div class="row">
          <div class="lable2">City *</div>
          <select class="s2" name="Mcity" id="Mcity" onchange="mselectvalidate3()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city = $values['name_en'];
                    $cityid = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid; ?>"><?php echo $city; ?></option>
                <?php
                  }
                ?>
            </select>
           </div>
        </div> <!-- grid end -->
        <div class="row">
          <div class="lable">Postal Code *</div>
            <input type="text" class="inpbox"  name="Mpostalcode" placeholder="50000"  required>
        </div>
        <div class="row">
          <div class="lable">Email *</div>
            <input type="text" class="inpbox"  name="Memail" placeholder="malika@gmail.com"  required>
        </div>
        <div class="desc">Specify the nearest cities around you</div>
        <div class="row">
          <div class="lable">Nearest city 1</div>
            <select class="s2" name="MNcity1" id="Mncity1" onchange="mselectvalidate4()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city1 = $values['name_en'];
                    $cityid1 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid1; ?>"><?php echo $city1; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="row">
          <div class="lable">Nearest city 2</div>
          <select class="s2" name="MNcity2" id="Mncity2" onchange="mselectvalidate5()" required>
              <option value="0"></option>
                <?php
                  foreach($cities as $key => $values){
                    $city2 = $values['name_en'];
                    $cityid2 = $values['id'];
                ?> 
                <option class="dl" value="<?php echo $cityid2; ?>"><?php echo $city2; ?></option>
                <?php
                  }
                ?>
            </select>
        </div>
        <div class="desc">Explain in few words about you</div>
        <div class="row">
          <div class="lable">Why can I be a Mentor</div>
            <textarea name="M" class="inpbox" id="q1" cols="10" rows="3"></textarea>
            <!-- <input type="text" class="inpbox"  name="email"  required> -->
        </div>
        <div class="row">
          <div class="lable">How Im going to mentor a Farmer</div>
          <textarea name="M" class="inpbox" id="q2" cols="10" rows="3"></textarea>
            <!-- <input type="text" class="inpbox"  name="email"  required> -->
        </div>
        <div class="desc">Enter a Username and Password </div>
        <div class="row">
          <div class="lable">Username</div>
            <input type="text" class="inpbox"  name="Muname" pattern="^[a-z0-9_-]{4,16}$" title="Invalid username" 
            placeholder="Username with 4 to 16 characters" required>
        </div>
        <div class="row">
          <div class="lable">Password</div>
            <input type="password" class="inpbox" name="Mpwd" id="Mpwd" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$"
            placeholder="minimum 8 characters and with Digits and Letters including Capital Letter" title="Should contain digits and letters" 
            onkeyup="pwdvalidatementor();buttonOnmentor();"  required>
        </div>
        <div class="row">
          <div class="lable">Confirm Password</div>
            <input type="password" class="inpbox"  name="Mcpwd" id="Mcpwd" onkeyup="pwdvalidatementor();buttonOnmentor();" placeholder="Retype Password"  required>
            <br><br><span id='Mmessage' style="padding-left:27%;font-size:13px;color:red;"></span>
        </div>
        <div class="agreement">
          <input type="checkbox" id="Mcbox" class="cbox" onClick="buttonOnmentor()">
          I have read and Agree to the follow <a href="#">User Agreement (Mentor)</a>
        </div>
        <div class="signupbtn">
          <input type="submit" value="Sign Up" disabled id="Msignupbtn">
        </div>
      </form>
    </div>
</div>

<script src="/thoga.lk/app/views/signup/script.js"></script>

</body>
</html>