<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/orders.css">
    <link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

    <title>Orders</title>
</head>
<body>

<?php include("navbar.php");?>

<br>


<div class="container">
<h1 align="center">Upcoming Orders</h1>
    <hr>
        <!-- Upcoming Orders -->
        <table>

            <thead>
                <tr>
                <th scope="col">Order id</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Pickup date</th>
                <th scope="col">Total weight</th>
                <th scope="col" style="text-align:left ;" colspan="2">Total Price</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Order id">#1234</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">01/11/2020</td>
                <td data-label="Total Weight">2500kg</td>
                <td data-label= "Total Price">$1,190</td>
                <td data-label><button onclick="location.href = 'viewmore';" type="submit">view more</button> </td>

                </tr>

                <tr>
                <td data-label="Order id">#3456</td>
                <td data-label="Buyer Name">Dumidu Kasun</td>
                <td data-label="Pickup date">05/11/2020</td>
                <td data-label="Total Weight">2512kg</td>
                <td data-label= "Total Price">$250000</td>
                <td data-label><button onclick="location.href = 'viewmore';" type="submit">view more</button> </td>

                </tr>
                
                <tr>
                <td data-label="Order id">#789</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">05/11/2020</td>
                <td data-label="Total Weight">320kg</td>
                <td data-label= "Total Price">$12500</td>
                <td data-label><button onclick="location.href = 'viewmore';" type="submit">view more</button> </td>

                </tr>
            </tbody>
        </table>


    </div>

<div class="container">
<h1 align="center">Previous Orders</h1>
    <hr>
        <!-- prevoius Orders -->
        <table>

            <thead>
                <tr>
                <th scope="col">Order id</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Pickup date</th>
                <th scope="col">Total weight</th>
                <th scope="col" style="text-align:left ;" colspan="2">Total Price</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Order id">#1234</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">01/11/2020</td>
                <td data-label="Total Weight">2500kg</td>
                <td data-label= "Total Price">$1,190</td>
                <td data-label><button onclick="location.href = 'viewmore';" type="submit">view more</button> </td>

                </tr>

                <tr>
                <td data-label="Order id">#3456</td>
                <td data-label="Buyer Name">Dumidu Kasun</td>
                <td data-label="Pickup date">05/11/2020</td>
                <td data-label="Total Weight">2512kg</td>
                <td data-label= "Total Price">$250000</td>
                <td data-label><button onclick="location.href = 'viewmore';" type="submit">view more</button> </td>

                </tr>
                
                <tr>
                <td data-label="Order id">#789</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">05/11/2020</td>
                <td data-label="Total Weight">320kg</td>
                <td data-label= "Total Price">$12500</td>
                <td data-label><button onclick="location.href = 'viewmore';" type="submit">view more</button> </td>

                </tr>
            </tbody>
        </table>


    </div>
    
</body>
</html>