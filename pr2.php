<?php
session_start();

$_SESSION['productName'] = 'song';
$_SESSION['productPrice'] = 30;

echo $_SESSION['productName'];
echo "<br>";
echo $_SESSION['productPrice'];
echo "<br>";
echo
"<script>
  document.cookie = 'username=John Doe';
</script>";
echo "<a href='./product.php'>Go to product.php</a>";