<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Manager</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
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
    <thead>
    <tr>
      <th width="5px">Id</th>
      <th width="20%">Caption</th>
      <th width="15%">Company</th>
      <th width="15px">Position</th>
      <th width="10px">Status</th>
      <th width="240px">Preview</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td data-column="Id">1</td>
      <td data-column="Buyer Name">Ad about Fertilizer</td>
      <td data-column="Total Weight">DF Fertilizers</td>
      <td data-column="Total Price">Vertical</td>
      <td data-column="Total Price">Active</td>
      <td><img src="" alt=""></td>
      <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a><a href="" class="actionA">Swap Position</a></td>
    </tr>
    <tr>
      <td data-column="Id">2</td>
      <td data-column="Buyer Name">Ad about seeds</td>
      <td data-column="Total Weight">Heyleys Seeds</td>
      <td data-column="Total Price">Vertical</td>
      <td data-column="Total Price">Active</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">3</td>
      <td data-column="Buyer Name">Ad about Fertilizers</td>
      <td data-column="Total Weight">Heyleys Agro</td>
      <td data-column="Total Price">Side</td>
      <td data-column="Total Price">Active</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">4</td>
      <td data-column="Buyer Name">Ad about pest killers</td>
      <td data-column="Total Weight">DNA Pest Control</td>
      <td data-column="Total Price">Side</td>
      <td data-column="Total Price">Disable</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">5</td>
      <td data-column="Buyer Name">Ad about weedicide</td>
      <td data-column="Total Weight">Lak Agro</td>
      <td data-column="Total Price">Verical</td>
      <td data-column="Total Price">Disable</td>
      <td data-column="Action"><a href="">View More</a></td>
      </tr>
    </tbody>
    </table>
    </div>
</div>
</body>
</html>