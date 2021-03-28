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
        if(isset($_SESSION['user'])){
            $user_data=$_SESSION['user'];
            foreach($user_data as $keys => $values){
                if($values['user_type'] == 'buyer'){
                    include (__DIR__."/../buyer/navbar.php");
                }elseif($values['user_type'] == 'farmer'){
                    include (__DIR__."/../farmer/navbar_dash.php");
                }elseif($values['user_type'] == 'driver'){
                    include (__DIR__."/../driver/navdriverdashboard.php");
                }elseif($values['user_type'] == 'mentor'){
                    include (__DIR__."/../mentor/navbar_dash.php");
                }elseif($values['user_type'] == 'admin'){
                    include (__DIR__."/../admin/navbar.php");
                }else{
                    include (__DIR__."/../buyer/navbar.php");
                }
            }
        }else{
            include (__DIR__."/../buyer/navbar.php");
        }
    ?>

    <div class="container">
        <div class="grid-item0">
            <form action="">
            <div class="filter-topic"> Added by </div>
            <div class="filter-items" id="1"><span>Driver<input type="checkbox" name="" id="1"></span></div>
            <div class="filter-items">Farmer<input type="checkbox" name="" id="1"></a></div>
            <div class="filter-items">Buyers<input type="checkbox" name="" id="1"></a></div><br>
            
            <div class="filter-topic"> Sort by </div>
            <div class="filter-items">Date<input type="checkbox" name="" id="1"></a></div>
            <div class="filter-items">Votes<input type="checkbox" name="" id="1"></a></div>
            <br>
            <button type="submit" class="fbtn">Filter</button>
            </form>
            <!-- <div class="filter-items"><a href="">Buyers</a></div><br> -->
        </div>


        <div class="grid-item1">
            <div>
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Search for Topic...">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <button class="admin-btn" id="myBtn" >Post New</button>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="mheader">
                        <span class="close" >&times;</span>
                            <span class="modeltopic">New Forum Post</span>
                        </div>
                    <div>
                            <form action="/thoga.lk/forum/postForum" method="POST" class="newforum">
                                <input type="text" name="topic" id="" placeholder="Title for Your Question" required>
                                <textarea name="description" id="" class="description" cols="30" rows="50" placeholder="Description" oninput="auto_grow(this)" required></textarea> 
                                <hr>
                                <input type="submit" class="fsubmit-btn" value="Post" name="post_forum">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                    foreach($data as $key=>$value){
                        $addeduser=$value['firstname'].' '.$value['lastname'];
                        $title=$value['title'];
                        $content=$value['description'];
                        $reply=$value['reply'];
                        $date_time=$value['date/time'];
                        $vote=$value['vote'];
                        $postid=$value['post_id'];
            ?>
                    <!-- Questions start here -->

            <!-- /***************/ -->
            <div class="forum-container">
                    <div class="forum-topic"><a class="links" href="/thoga.lk/forum/fullview?post_id=<?php echo $postid;?>"><?php echo ucfirst($title);?></a><br>
                <span class="author">By - <?php echo $addeduser." on ".$date_time;?> </span>
                </div>
                <div class="forum-contols">
                    <center style="font-size:20px;"><?php echo $vote; ?></center>
                    <center style="font-size:20px;">Votes</center><br>
                    <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                    <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
                    <br> Like &nbsp &nbsp &nbsp  Unlike
                </div>
                <div class="forum-content">
                    <?php echo ucfirst($content) ?> 
                </div>
                <div class="reply">
                    <b style="color:#2E5F3E;font-size:14px;">Top Reply</b><br>
                    <!-- <span class="author" >By - Dumidu Kasun Bandara </span><br> -->
                    <p>
                        <?php echo ($reply==null)?"<span style='color:#969696'>No any replies</p>":"<span style='color:black'>".ucfirst($reply)."</span>" ?>
                    </p>
                </div>
                
            </div>
            <hr>
            <?php
                }
            ?>
            <!-- *************** -->
        </div>
        <div >
            <img class="ad" src="/thoga.lk/public/images/ads/a.jpg" alt="ad">
                <br>
            <img class="ad ad2" src="/thoga.lk/public/images/ads/a.jpg" alt="ad">
                

        </div>
    </div>

    <script>
        
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
        modal.style.display = "block";
        }

        span.onclick = function() {
        modal.style.display = "none";
        }

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