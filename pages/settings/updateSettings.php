<?php
  session_start();
  include_once("../login_signup/db_connection.php");
  
  $name = $_POST['fullName'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];

  if(isset($_FILES['profile_avatar'])){
    $profileImg = $_FILES['profile_avatar']['name'];
    $destination = '../../assets/media/profiles/'. $profileImg;
    if(file_exists($destination)){
      echo "This file already exists, rename before uploading"."<br>";
    }
    else{
      $uploaded = move_uploaded_file($_FILES['profile_avatar']['tmp_name'], $destination);
      if(!$uploaded){
        echo "File not uploaded"."<br>";
      }
      else{
        $_SESSION['profile'] = "assets/media/profiles/". $profileImg; 
        updateField($conn, 'profile_img', $_SESSION['profile']);
      }
    }
  }

  if($name==!""){
    $udated = updateField($conn, 'name', $name);
    if($udated){
      $_SESSION["name"]=$name;
    }
  }
  if($email==!""){
    $udated = updateField($conn, 'email', $email);
    if($udated){
      $_SESSION["email"]=$email;
    }
  }
  if($contact==!""){

    updateField($conn, 'contact', $contact);
    
  }
  if($address==!""){

    $udated = updateField($conn, 'address', $address);
    
  }
  
  function updateField($conn, $column, $val){
    $uId = $_SESSION['id'];
    $query = "UPDATE `users` SET `$column`= ? WHERE `id`= ? ; ";
    $statement = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($statement, $query);
    mysqli_stmt_bind_param($statement, "si", $val, $uId);
    $executed = mysqli_stmt_execute($statement);
    if(!$executed){
      echo "Update Failed";
      return false;
    }
    else{
      echo $column . " updated successfully" . "<br>";
      return true;
    }

  }
