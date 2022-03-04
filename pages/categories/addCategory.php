<?php
  if(!isset($_POST['addNew'])){
    echo "Form Not submitted"; 
  }
  else{
    $par = $_POST['parent'];
    $child = $_POST['child'];
    print_r($_POST);
    echo $par;
    if($par="" || $child==""){
      echo "Write name of child category and choose parent Category";
    }
    else{
      include_once('../login_signup/db_connection.php');
      $query = "INSERT INTO `categories` (`parent`, `child`) VALUES ('$par','$child');";
      $result = mysqli_query($conn, $query);
      if(!$result){
        echo "Unable to create new Category";
      }
      else{
        echo "New Category Created";
      }
    }
  }
  // header("Refresh:3; URL=./categories.php");
  
