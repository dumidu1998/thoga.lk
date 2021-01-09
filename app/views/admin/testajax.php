<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="inp" id="t1"><br><br>
        <input type="button" value="Submit" onclick="send()">
    </form>
</body>

<script>
    function send() {
        val=document.getElementById('t1').value;
        $.ajax({
            url:"testtsub",    //the page containing php script
            type: "post",    //request type,
            data: {registration: val, name: "xyz", email: "abc@gmail.com"},
            success:function(result){
                console.log(result);
            }
        });
    }
</script>

</html>
