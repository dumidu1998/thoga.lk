<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
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
        }
        calendar.unselect();
        addunavailability();
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          arg.event.remove();
          removeunavailability();
        }
      },
      editable: true,
      height: '100%',
      dayMaxEvents: true, 
      events:<?php echo $alldates;?>
    });

    calendar.render();
  });


function removeunavailability(){
  alert("removed");
}

function addunavailability(){
  alert("added");
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
</body>
</html>
