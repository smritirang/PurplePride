<?php
  $userID = $_SESSION["userID"];
  header("Location: profile.php?id={$userID}");

?>
