<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/forum/forumq.css" type='text/css'>

    <title>Problem #<?php echo $post_id;?></title>
</head>
<body>
    <?php 
        session_start();
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
        $addeduser=$question[0]['firstname'].' '.$question[0]['lastname'];
        $title=$question[0]['title'];
        $content=$question[0]['description'];
        $date_time=$question[0]['date/time'];
        $vote=$question[0]['vote'];
    ?>                                                                                         
    a<?php echo $content ?>z
    <div class="container">
        <div class="maincontainer">
                <div class="forum-container">
                    <div class="forum-topic"><?php echo ucfirst($title) ?></div>
                    <img src="../public/uploads/userprofilepictures/<?php echo "2"?>.jpg" alt="" class="profile0"> 

                    <div class="rname" style="margin:5px 0px 0px 35px">By <?php echo $addeduser ?> on <?php echo $date_time ?></div>
                    <div class="forum-contols">
                        <center style="font-size:35px;"><?php echo $vote ?></center>
                        <center style="font-size:20;">Votes</center><br>
                        <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" alt="" onclick="dd()" style="margin-right:20px;margin-left:2px" >
                        <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" alt="Submit"  onclick="dd()">
                        <br> Like &nbsp &nbsp &nbsp  Unlike
                    </div>
                    <div class="forum-content">
                        <?php echo ucfirst($content) ?>
                    </div>
                </div>
                <div>
                    <hr>
                    <span class="nreply"><?php echo $count?> Replies</span>
                    <hr>
                </div>
                <?php
                    foreach($replies as $key=>$value){
                        $addeduser=$value['firstname'].' '.$value['lastname'];
                        $content=$value['reply'];
                        $date_time=$value['date_time'];
                        $vote=$value['vote'];
                        $postid=$value['post_id'];
                        $userid=$value['user_id'];
                ?>
                <div class="reply-container">
                    <div>
                        <div class="re-vote">
                            <?php echo $vote ?> votes
                            <input type="image" class="like-unlike" id="lbtn" src="/thoga.lk/public/images/forum/thumbs-up-solid.svg" style="margin-right:20px;margin-left:19px" >
                            <input type="image" class="like-unlike" id="ulbtn" src="/thoga.lk/public/images/forum/thumbs-down-solid.svg" > 
                        </div>
                        <img src="../public/uploads/userprofilepictures/<?php echo $userid?>.jpg" alt="" class="profile"> 
                        <span class="rname">By <?php echo $addeduser ?> on <?php echo $date_time;?></span>
                    </div>
                    <div class="reply-content">
                        <p><?php echo ucfirst($content) ?></p> 
                    </div> 
                </div>
                <hr style="height:0.1px;"> 
                <?php
                    }
                ?>
                
                <?php
                    if($replies==null){
                        echo "<center class='noreply'>No any replies</center>";
                    }
                ?>
                <div class="writereply">
                    <form action="addreply" method="post">
                        <input type="hidden" name="post_id" value="<?php echo $post_id;?>">
                        <div class="replyh">Write a Reply</div>
                        <div class="TAcontainer">
                            <textarea style="height:300px;background-color: black;width: 95%;" name="reply" id="reply" cols="30" rows="8"></textarea>
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
    </script>	
    <?php include("footer.php"); ?>			
</body>
</html>