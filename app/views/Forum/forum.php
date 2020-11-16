<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/forum/forum.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Forum</title>
</head>
<body onload="my()">
<?php 
 include ('navbar.php'); ?>
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
            <div>
                <button class="admin-btn" id="myBtn" >Post New</button>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="mheader">
                        <span class="close" >&times;</span>
                            <span class="modeltopic">New Forum Post</span>
                        </div>
                        <div >
                            <form action="" method="get" class="newforum">
                                <input type="text" name="" id="" placeholder="Title for Your Question">
                                <textarea name="" id="" class="description" cols="30" rows="50" placeholder="Description" oninput="auto_grow(this)" ></textarea> 
                                <hr>
                                <input type="submit" class="fsubmit-btn" value="Post">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-container">
                <div class="forum-topic"><a class="links" href="forumq.php">My tomato plants are damaged by insects</a><br>
                <span style="font-size:13px">By - Dumidu Kasun Bandara </span>
                </div>
                <div class="forum-contols">
                    <center style="font-size:35px;">0</center>
                    <center style="font-size:20;">Votes</center><br>
                    <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                    <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
                    <br> Like &nbsp &nbsp &nbsp  Unlike
                </div>
                <div class="forum-content">
                    My Problem is that I have an insect that eats the leaves of my tomato plant. It is a small insect difficult to see using the eye. 
                    Can someone help me to get rid of that insect. <br>
                    Thank you. 
                </div>
                <div class="reply">
                    <b>Top Reply</b><br>
                    <span style="font-size:13px";>By - Dumidu Kasun Bandara </span><br>
                    Cause for this is the mine bug. To remove mine bug you have to spray water mixed with soap untill the patches get healed. 
                </div>
            </div>

            <div class="forum-container">
                <div class="forum-topic"><a class="links" href="#">My tomato plants are damaged by insects</a>
                <div style="font-size:13px">By - Dumidu Kasun Bandara </div>
                </div>
                <div class="forum-contols">
                    <center style="font-size:35px;">0</center>
                    <center style="font-size:20;">Votes</center><br>
                    <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                    <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
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
            <img class="ad" src="/thoga.lk/public/images/ads/a.jpg" alt="ad">

        </div>
    </div>

    <script>
        
// Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

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

        function auto_grow(element) {
            element.style.height = "5px";
            element.style.height = (element.scrollHeight)+"px";
        }
    </script>
</body>
</html>