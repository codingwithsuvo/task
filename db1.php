<?php
//echo 'db file called'; 
$con = mysqli_connect("localhost","test","2012") or die("DB Server is down");
mysqli_select_db($con,"task") or die("DB not available");
?>