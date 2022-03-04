<?php
include_once("./db_connection.php");
$email =  $_POST['email'];
$pwd = $_POST['password'];
$query = "SELECT * FROM `users` WHERE `email` = ?;";
$userRoles = '';
$stmt = mysqli_stmt_init($conn);
$prep = mysqli_stmt_prepare($stmt, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
$exec  = mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);


if (!$row) {
  echo "Invalid email";
} else if ($result) {
  $hashedPwd = $row['password'];
  echo $pwd;
  if (!password_verify($pwd, $hashedPwd)) {
    echo "Wrong Password";
  } else {
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['profile'] = $row['profile_img'];
    if($row['is_admin']){
      $_SESSION['role'] = "Admin";
      header("location: ../../index.php");
    }
    else if($row['is_fan']){
      $userRoles.="fan";
      $_SESSION['role'] = "Fan";
      if($row['is_star']){
        $userRoles.="_star";
      } 
      if($row['is_organizer']){
        $userRoles.="_organizer";
      }
      if($row['is_supplier']){
        $userRoles.="_supplier";
      }
      
      header("location:  ./dashboard.php?userRoles=$userRoles");
    }
    
  }
}


?>
