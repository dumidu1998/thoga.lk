<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/vertical.css">
</head>
<body>
<?php //echo $_SESSION['farmer']['mentor_id'];?>
<div class="sidebar">
<a  href="add_item">Add Items</a>
  <a href="listed">Listed Items</a>
  <div class="mentor">
  <?php $disabled='a';$status='Request Mentor';if(isset($_SESSION['farmer']['mentor_id'])&& $_SESSION['farmer']['mentor_id']==0){
    $status=' Mentor Requested';
    $disabled='b';
  }else if(isset($_SESSION['farmer']['mentor_id'])&& $_SESSION['farmer']['mentor_id']>0){
    $status='Assigned a Mentor';
    $disabled='b';
  }?>
  <?php echo "<".$disabled." href='#' onclick='reqestmentor(".$_SESSION['user'][0]['user_id'].")'>".(isset($status)?$status:'')."</".$disabled.">";?>
</div>
</div>
</body>
<script>
function reqestmentor(id){
  var x=confirm('Are you sure You want a mentor?');
  if(x){
    window.location.href="requestmentor?id="+id;
  }else{
  }
}
</script>
</html>