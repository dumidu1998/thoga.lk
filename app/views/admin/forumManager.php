<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Manager</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/forummanager.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); 
 
 ?>

<div class="container">
    <h1>Forum Manager</h1>
    <?php foreach($data as $key=>$values){
        ?>
    <div>
        <table>
            <tbody>
            <tr>
                <td colspan="2"><?php echo $values['id']." - ".$values['title']." (By <a href='userview?uid=".$values['user_id']."'>".$values['fname']." ".$values['lname']."</a>)";?></td>
                <td style="width:20px;"><a href="deletepost?id=<?php echo $values['id']?>"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php foreach($values[0]['replies'] as $key2=>$values2){
                ?>
                <tr>
                <td width="7%"></td>
                <td><?php  echo $values2['reply_id']." - ".$values2['reply']." (By <a href='userview?uid=".$values2['user_id']."'>".$values2['firstname']." ".$values2['lastname'].")";?></td>
                <td style="width:20px;"><a href="deletereply?id=<?php  echo $values2['reply_id'];?>"><i class="fas fa-trash"></i></a></td>
            </tr>
                <?php }?>
            <!-- <tr>
                <td></td>
                <td>asd</td>
                <td style="width:20px;"><a href=""><i class="fas fa-trash"></i></a></td>
            </tr> -->
            </tbody>
        </table>
    </div><hr width="90%">
    <?php }?>

</div>
</body>
</html>