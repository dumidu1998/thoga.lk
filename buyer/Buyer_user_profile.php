<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b_user_profile.css">
</head>
<body>
    <?php include("navbar.php");?>

    <div class="wrapper">
        <div class="user_pp">
            <!-- img -->
            <img width="300px" src="../imgs/a.jpg" alt="">
            <input type="file" value="upload image">

        </div>
        
        <div class="user_details">
            <!-- user details -->
            <form action="">
                <div class="data_wrapper">
                    <label for="">name</label>
                    <input type="text">
                    <input type="button" >edit

                </div>

                <div class="data_wrapper">
                    <label for="">name</label>
                    <input type="text">
                    <input type="button" >edit

                </div>

                <div class="data_wrapper">
                    <label for="">name</label>
                    <input type="text">
                    <input type="button" >edit

                </div>

                <div class="data_wrapper">
                    <label for="">name</label>
                    <input type="text">
                    <input type="button" >edit

                </div>

                <div class="data_wrapper">
                    <label for="">name</label>
                    <input type="text">
                    <input type="button" >edit

                </div>

                <div class="data_wrapper">
                    <label for="">name</label>
                    <input type="text">
                    <input type="button" value="edit">

                </div>
            </form>

        </div>
        <div>
            <!-- Advertistment -->
            <img width="300px" src="../imgs/ads/a.jpg" alt="">

        </div>

    </div>

    <h1 align="center">Order History</h1>
    <hr>

    <div class="container">
        <!-- order history -->
        <table>

            <thead>
                <tr>
                <th scope="col">Order id</th>
                <th scope="col">Buyer Name</th>
                <th scope="col">Pickup date</th>
                <th scope="col">Total weight</th>
                <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td data-label="Account">Visa - 3412</td>
                <td data-label="Due Date">04/01/2016</td>
                <td data-label="Amount">$1,190</td>
                <td data-label="Period">03/01/2016 - 03/31/2016</td>
                <td data-label="Amount">$1,190</td>
                <td> <button type="submit">edit</button> </td>
                </tr>
                <tr>
                <td scope="row" data-label="Account">Visa - 6076</td>
                <td data-label="Due Date">03/01/2016</td>
                <td data-label="Amount">$2,443</td>
                <td data-label="Period">02/01/2016 - 02/29/2016</td>
                <td data-label="Amount">$1,190</td>
                <td> <button type="submit">edit</button> </td>

                </tr>
                <tr>
                <td scope="row" data-label="Account">Corporate AMEX</td>
                <td data-label="Due Date">03/01/2016</td>
                <td data-label="Amount">$1,181</td>
                <td data-label="Period">02/01/2016 - 02/29/2016</td>
                <td data-label="Amount">$1,190</td>
                <td> <button type="submit">edit</button> </td>

                </tr>
                <tr>
                <td scope="row" data-label="Acount">Visa - 3412</td>
                <td data-label="Due Date">02/01/2016</td>
                <td data-label="Amount">$842</td>
                <td data-label="Period">01/01/2016 - 01/31/2016</td>
                <td data-label="Amount">$1,190</td>
                <td> <button type="submit">edit</button> </td>

                </tr>
            </tbody>
        </table>


    </div>
    
</body>
</html>

-