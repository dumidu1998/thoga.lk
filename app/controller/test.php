<?php
$data= "[{
    title: 'Order #12',
    start: '2020-09-01'
  },
  {
    title: 'Unavailable',
    start: '2020-09-07',
    end: '2020-09-10',
    color: '#d00000'
  }]";
  header('Content-Type: application/json');
  $data=json_encode($data);

  echo $data;



?>