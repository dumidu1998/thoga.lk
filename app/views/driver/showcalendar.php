

<html>
    <head>
        <title>Driver Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/showcalendar.css">
    </head>

    <body style="background-image: url('/thoga.lk/public/images/driver/98.jpg');">
        <?php include("navbarcalendar.php"); ?>
        <div class="topic">
                <h1>Calendar</h1>
        </div>
        <hr>
        <div class="menu" >
           
            <div class="text">
            Click on the dates to make unavailable 👉
            </div>
            <div class = "cal">
                <?php include("calendar.php"); ?>
            </div>
        </div>    
        <div class="date">
            <h2>Make unavailable multiple dates</h2>
        </div>
        <div class ="bottom">
            
                
                   <form method="post" action="unavailabledates">  
                        <label for="start date">From :-</label>
                        <input id="datefield" type="date" class="advancedinput" name="startdate" required>
                        <label for="end date">To :-</label>
                        <input id="datefield1" type="date" class="advancedinput" name="enddate" required>
                        <input type="submit" value="Submit" class="button1" name="submitdates">
                    </form>
        </div>
        
        <script>
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10){
                    dd='0'+dd
                } 
                if(mm<10){
                    mm='0'+mm
                } 

            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("datefield").setAttribute("min", today);
            document.getElementById("datefield1").setAttribute("min", today);
        </script>
        
        
        <?php include("footer.php"); ?>  
    </body>
</html>