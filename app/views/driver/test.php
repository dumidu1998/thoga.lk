<?php

$q=0;
$r=0;
if(isset($_REQUEST['sdate'])){

    $q=$_REQUEST['sdate'];
    $r=$_REQUEST['edate'];
}
echo $q;
echo "  ";
echo $r;

?>
