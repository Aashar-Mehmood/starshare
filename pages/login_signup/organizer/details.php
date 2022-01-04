<?php 

  /*
    first argument of checkRole is id of the user
    this will be accessible to us through global array of $_SESSION
  */
  require_once("../checkRole.php");
  require_once("../db_connection.php");
  $role = checkRole("1", $conn);
  if($role!=="organizer"){
    header("Location: ../signupForRole.php?role=organizer");
  }
?>
