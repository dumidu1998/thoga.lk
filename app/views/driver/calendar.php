<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   
  crossorigin="anonymous"></script>
<link href='/thoga.lk/public/fullcalendarlib/main.css' rel='stylesheet' />
<script src='/thoga.lk/public/fullcalendarlib/main.js'></script>
<script>
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); 
  var yyyy = today.getFullYear();
  today = yyyy + '-' + mm + '-' + dd;
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      nextDayThreshold:'00:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth'
      },
      initialDate: today,
      navLinks: false,
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = 'Unavailable';
        var go=confirm('Are you sure to make unavailable?');
        type='a';
        var tt= type=='a'?'#d00000':'';
        if (go) {
          calendar.addEvent({
            title: title,
            color: tt,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
          addunavailability(arg.start);
        }
        calendar.unselect();
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to mark '+convert(arg.event.start)+' as available?')) {
          arg.event.remove();
          removeunavailability(arg.event.start);
        }
      },
      editable: true,
      dayMaxEvents: true, 
      events: <?php echo $alldates; ?>
    });

    calendar.render();
  });


function removeunavailability(x){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("d").innerHTML = this.responseText;
      alert(convert(x) + " marked as available.");
    }
  };
  xhttp.open("GET", "/thoga.lk/driver/removeunavail?sdate="+convert(x) , true);
  xhttp.send();
}

function addunavailability(x){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("d").innerHTML = this.responseText;
      alert(convert(x) + " marked as unavailable.");
    }
  };
  xhttp.open("GET", "/thoga.lk/driver/addunavail?sdate="+convert(x) , true);
  xhttp.send();
}

function convert(str) {
  var date = new Date(str),
    mnth = ("0" + (date.getMonth() + 1)).slice(-2),
    day = ("0" + date.getDate()).slice(-2);
  return [date.getFullYear(), mnth, day].join("-");
}

</script>
<style>

  body {
    
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    width: 50%;
    max-width: 1100px;
    margin: 0 auto;
    padding:5px;
    border: 3px black solid;
  }

  .fc-event{
    height: 25px;
  }

  
@media only screen and (max-width:820px) {
    
    #calendar{
  width:100%;
}
} 
</style>
</head>
<body>

  <div id='calendar'></div>
  <div id="d"></div>
</body>
</html>
