<?php
include_once('./pages/login_signup/db_connection.php');
$rs = mysqli_query($conn, "SELECT `date`, `time` FROM `events`;");
$arr = mysqli_fetch_assoc($rs);

$time = date_format(new DateTime($arr['time']), 'h-i-s : A');

echo date('h-i-s : A', strtotime($arr['time']));
echo "<br>";
echo "<br>";
echo $time;
echo "<br>";
echo "<br>";


$today = date('d-m-Y', timestamp: time());
$add1Day = date_add(new DateTime($today), new DateInterval("P1D"));
$add2Day = date_add(new DateTime($today), new DateInterval("P2D"));
$added1 = date_format($add1Day, "Y-m-d");
$added2 = date_format($add2Day, "Y-m-d");
echo $added1;
echo "<br>";
echo "<br>";
echo $added2;
