<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/forum/forumq.css" type='text/css'>

    <title>Problem #21</title>
</head>
<body>
    <?php 
        session_start();
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
    
    ?>                                                                                         
    
    <div class="container">
        <div class="maincontainer">
                <div class="forum-container">
                    <div class="forum-topic">My tomato plants are damaged by insects</div>
                    <div class="rname" style="margin:5px 0px 0px 35px">By Dumidu Kasun on 2020-11-11 20:37:59</div>
                    <div class="forum-contols">
                        <center style="font-size:35px;">0</center>
                        <center style="font-size:20;">Votes</center><br>
                        <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                        <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
                        <br> Like &nbsp &nbsp &nbsp  Unlike
                    </div>
                    <div class="forum-content">
                        My problem is that, there is an insect that eats the leaves of my tomato plants. It is a small insect difficult to see with the eye. 
                        Can someone help me to get rid of that insect. <br>
                        Thank you. 
                    </div>
                </div>
                <div>
                    <hr>
                    <span class="nreply">2 Replies</span>
                    <hr>
                </div>
                <div class="reply-container">
                    <div>
                        <div class="re-vote">
                            3 votes
                            <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" style="margin-right:20px;margin-left:19px" >
                            <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" > 
                        </div>
                        <img src="../public/images/admin/b.png" alt="" class="profile"> 
                        <span class="rname">By Dumidu Kasun</span>
                    </div>
                    <div class="reply-content">
                        Cause for this is the mine bug. To remove mine bug you have to spray water mixed with soap untill the patches get healed. 
                    </div> 
                </div>
                <hr style="height:0.1px;"> 

        
                <div class="reply-container">
                    <div>
                        <img src="../public/images/admin/b.png" alt="" class="profile"> 
                        <span class="rname">By Dumidu Kasun</span>
                            <div class="re-vote">
                                3 votes
                                <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" style="margin-right:20px;margin-left:19px" >
                                <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" > 
                            </div>
                    </div>
                    <div class="reply-content">
                        Cause for this is the mine bug. To remove mine bug you have to spray water mixed with soap untill the patches get healed. 
                    </div> 
                </div>
                <hr style="height:0.1px;"> 
                <hr style="height:0.1px;"> 
                <div class="writereply">
                    <form action="" method="get">
                        <div class="replyh">Write a Reply</div>
                        <div class="TAcontainer">
                            <textarea style="height:300px;background-color: black;width: 95%;" name="reply" id="reply" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="sbtn">Submit</button>
                    </form>
                </div>
        </div>

        <div class="adcontainer">
            <img class="ad" src="/thoga.lk/public/images/ads/a.jpg" alt="ad">
        </div>

    </div>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
        new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('reply');
        function goback(){
            window.history.back();
        }
    </script>	
    <?php include("footer.php"); ?>			
</body>
</html>