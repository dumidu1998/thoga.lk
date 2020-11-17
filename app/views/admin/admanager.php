<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Manager</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>Advertisement Manager</h1>
    <div>
      <table>
        <button class="admin-btn " id="myBtn" onclick="showadd()">Post New</button>
    <thead>
    <tr>
      <th width="5px">Id</th>
      <th width="20%">Caption</th>
      <th width="25%">Company</th>
      <th width="15px">Position</th>
      <th width="10px" >Status</th>
      <th width="100px" >Preview</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td data-column="Id">1</td>
      <td data-column="Caption">Ad about Fertilizer</td>
      <td data-column="Company">DF Fertilizers</td>
      <td data-column="Position">Vertical</td>
      <td data-column="Status">Active</td>
      <td class="centerit" data-column="Preview"><img src="a.jpg" alt="" class="preview"></td>
      <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a><a href="" class="actionA">Swap Position</a></td>
    </tr>
    <tr>
      <td data-column="Id">2</td>
      <td data-column="Caption">Ad about seeds</td>
      <td data-column="Company">Heyleys Seeds</td>
      <td data-column="Position">Vertical</td>
      <td data-column="Position">Active</td>
      <td class="centerit" data-column="Preview"><img src="a.jpg" alt="" class="preview"></td>
      <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a><a href="" class="actionA">Swap Position</a></td>
    </tr>
    <tr>
      <td data-column="Id">3</td>
      <td data-column="Caption">Ad about Fertilizers</td>
      <td data-column="Company">Heyleys Agro</td>
      <td data-column="Position">Side</td>
      <td data-column="Position">Active</td>
      <td class="centerit" data-column="Preview"><img src="a.jpg" alt="" class="preview"></td>
      <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a><a href="" class="actionA">Swap Position</a></td>
    </tr>
    <tr>
      <td data-column="Id">4</td>
      <td data-column="Caption">Ad about pest killers</td>
      <td data-column="Company">DNA Pest Control</td>
      <td data-column="Position">Side</td>
      <td data-column="Position">Disabled</td>
      <td class="centerit" data-column="Preview"><img src="a.jpg" alt="" class="preview"></td>
      <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a><a href="" class="actionA">Swap Position</a></td>
    </tr>
    <tr>
      <td data-column="Id">5</td>
      <td data-column="Caption">Ad about weedicide</td>
      <td data-column="Company">Lak Agro</td>
      <td data-column="Position">Verical</td>
      <td data-column="Position">Disabled</td>
      <td class="centerit" data-column="Preview"><img src="a.jpg" alt="" class="preview"></td>
      <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a><a href="" class="actionA">Swap Position</a></td>
      </tr>
    </tbody>
    </table>
    </div>

    <div id="signup" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Add new Post</h2>
      <form action="" method="POST" enctype="multipart/form-data">
      <div>
          <label for="1" class="lable">Caption</label>
          <input type="text" name="" id="1">
          <label for="2" class="lable">Company</label>
          <input type="text" name="" id="2">
          <label for="3" class="lable">Position</label>
          <select id="3">
            <option value="v">Vertical</option>
            <option value="v">Horizontal</option>
          </select>
          <label for="file" class="lable">Caption</label>
          <input type="file" name="file" id="file" onchange="uploadFile()">
          <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
          <u id="status" style="font-size:10px"></u>
          <u id="loaded_n_total" style="font-size:10px"></u><br>
          <input type="submit" value="Submit" class="submit-btn">
      </div>
      </form>
    </div>
    </div>


</div>
</body>
</html>

<script type="text/javascript" src="/thoga.lk/public/js/admin.js" ></script>