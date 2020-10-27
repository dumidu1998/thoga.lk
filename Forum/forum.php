<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forum.css" type='text/css'>
    <link rel="stylesheet" href="font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="font-awesome.css" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Forum</title>
</head>
<body onload="my()">
    <div class="container">
        <div class="grid-item0">
            <div class="filter-topic"> Added by </div>
            <div class="filter-items"><i class="fa fa-circle" style="font-size:12px;margin-right:10px" aria-hidden="true"></i><a class="links" href="">Driver</a></div>
            <div class="filter-items"><i class="fa fa-circle" style="font-size:12px;margin-right:10px" aria-hidden="true"></i><a class="links" href="">Farmer</a></div>
            <div class="filter-items"><i class="fa fa-circle" style="font-size:12px;margin-right:10px" aria-hidden="true"></i><a class="links" href="">Buyers</a></div><br>
            
            <div class="filter-topic"> Sort by </div>
            <div class="filter-items"><i class="fa fa-circle" style="font-size:12px;margin-right:10px" aria-hidden="true"></i><a class="links" href="">Date</a></div>
            <div class="filter-items"><i class="fa fa-circle" style="font-size:12px;margin-right:10px" aria-hidden="true"></i><a class="links" href="">Votes</a></div>
            <!-- <div class="filter-items"><a href="">Buyers</a></div><br> -->
        </div>


        <div class="grid-item1">
            <div class="forum-container">
                <div class="forum-topic"><a class="links" href="#">My Tomato plants are damaged by insects</a></div>
                <div class="forum-contols">
                    <center style="font-size:35px;">0</center>
                    <center style="font-size:20;">Votes</center><br>
                    <input type="image" class="like-unlike" id="lbtn" src="thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                    <input type="image" class="like-unlike" id="ulbtn" src="thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
                    <br> Like &nbsp &nbsp &nbsp  Unlike
                </div>
                <div class="forum-content">
                    My Problem is that I have an insect that eats the leaves of my tomato plant. It is a small insect difficult to see using the eye. 
                    Can someone help me to get rid of that insect. <br>
                    Thank you. 
                </div>
                <div class="reply">
                    <b>Top Reply</b><br>
                    <span style="font-size:13px">By - Dumidu Kasun Bandara </span><br>
                    Cause for this is the mine bug. To remove mine bug you have to spray water mixed with soap untill the patches get healed. 
                </div>
            </div>

            <div class="forum-container">
                <div class="forum-topic"><a class="links" href="#">My Tomato plants are damaged by insects</a></div>
                <div class="forum-contols">
                    <center style="font-size:35px;">0</center>
                    <center style="font-size:20;">Votes</center><br>
                    <input type="image" class="like-unlike" id="lbtn" src="thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                    <input type="image" class="like-unlike" id="ulbtn" src="thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
                    <br> Like &nbsp &nbsp &nbsp  Unlike
                </div>
                <div class="forum-content">
                    My Problem is that I have an insect that eats the leaves of my tomato plant. It is a small insect difficult to see using the eye. 
                    Can someone help me to get rid of that insect. <br>
                    Thank you. 
                </div>
                <div class="reply">
                    <b>Top Reply</b><br>
                    <span style="font-size:13px">By - Dumidu Kasun Bandara </span><br>
                    Cause for this is the mine bug. To remove mine bug you have to spray water mixed with soap untill the patches get healed. 
                </div>
            </div>

            
        </div>
        <div >
            <img class="ad" src="../imgs/ads/a.jpg" alt="ad">

        </div>
    </div>

    <script>
        function dd(){
            alert("d");
        }
        function my(){
            vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
            var z=document.querySelectorAll('.like-unlike');
            var i;
            if(vw<=600){
                for(i=0;i<z.length;i++)z[i].disabled=true;
            }
        }
    </script>
</body>
</html>