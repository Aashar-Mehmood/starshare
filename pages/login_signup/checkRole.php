<?php
  function checkRole($uId, $connection)
  {
    $query = "SELECT `secondary_role` FROM `roles` WHERE `u_id`= $uId;";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_row($result);
    $role = $arr[0];
    return $role;
  }
?>
