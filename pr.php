<?php
session_start();

$_SESSION['productName'] = 'ticket';
$_SESSION['productPrice'] = 10;

echo $_SESSION['productName'];
echo "<br>";
echo $_SESSION['productPrice'];
echo "<br>";

print_r($_COOKIE);

echo "<a href='./product.php'>Go to product.php</a>";