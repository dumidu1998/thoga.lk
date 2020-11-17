<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);

.b, .bb {
  position: absolute;
  width: 100%;
  height: 100%;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
}

.bb {
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  display: none;
}

.message {
  position: absolute;
  top: -200px;
  left: 50%;
  transform: translate(-50%, 0%);
  width: 300px;
  background: rgba(68, 185, 28, 0.97);
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  font-weight: 300;
  color: #2c2928;
  opacity: 0;
  transition: top 0.3s cubic-bezier(0.31, 0.25, 0.5, 1.5), opacity 0.2s ease-in-out;
}
.message .check {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%) scale(4);
  width: 120px;
  height: 110px;
  background: #7BED35;
  color: white;
  font-size: 3.8rem;
  padding-top: 10px;
  border-radius: 50%;
  opacity: 0;
  transition: transform 0.2s 0.25s cubic-bezier(0.31, 0.25, 0.5, 1.5), opacity 0.1s 0.25s ease-in-out;
}
.message .scaledown {
  transform: translate(-50%, -50%) scale(1);
  opacity: 1;
}
.message p {
  font-size: 1.2rem;
  margin: 25px 0px;
  padding: 0;
  font-weight:700;
}
.message p:nth-child(2) {
  font-size: 2.3rem;
  margin: 40px 0px 0px 0px;
}
.message #ok {
  position: relative;
  color: white;
  border: 0;
  background: #33971A;
  width: 100%;
  height: 50px;
  border-radius: 6px;
  font-size: 1.2rem;
  transition: background 0.2s ease;
  outline: none;
}
.message #ok:hover {
  background: #25790F;
}
.message #ok:active {
  background: #5a9f32;
}

.comein {
  top: 150px;
  opacity: 1;
}
</style>
</head>
<body>
<div class='b'></div>
<div class='bb'></div>
<div class='message'>
  <div class='check'>
    &#10004;
  </div>
  <p>
    Success
  </p>
  <p>
    Sign Up Successful. We will send you an SMS with Confirmation!
  </p>
  <button id='ok'>
    OK
  </button>
</div>

</body>

<script>
    // $('#go').click(function(){go(50)});
 $('#ok').click(function(){go(500)});

setTimeout(function(){go(50)},700);
setTimeout(function(){go(500)},3000);
//$('#ok').off('click');

function go(nr) {
  $('.bb').fadeToggle(200);
  $('.message').toggleClass('comein');
  $('.check').toggleClass('scaledown');
  $('#go').fadeToggle(nr);
}

$(document).mouseup(function(e) 
{
    var container = $(".message");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        go(50);
        container.hide();
        $('.message').off('click');
        $('#ok').off('click');
    }
});
</script>

</html>