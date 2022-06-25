<?php
session_start();
$serverName = "localhost";
$username = "root";
$password = "root";
$dbtable = "purple_pride";

$conn = mysqli_connect($serverName, $username, $password, $dbtable);
$ids = [];
$message = $_POST['message'];
$userID = $_SESSION["userID"];
$query="select * FROM Users";
$result= mysqli_query($conn,$query);
while($userObject = mysqli_fetch_assoc($result)){
  if($userObject['id'] == $userID){
    printf("yes");
  }
  else{
    $ids[] = $userObject['id'];
  }
}
$selected = array_rand($ids, 1);
echo $ids[0];
$sql = "UPDATE Users SET message = '{$message}' WHERE id = '{$ids[$selected]}'  ";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: profile.php?id={$userID}")
?>
