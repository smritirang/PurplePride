<?php
session_start();
$serverName = "localhost";
$username = "root";
$password = "root";
$dbtable = "purple_pride";

$conn = mysqli_connect($serverName, $username, $password, $dbtable);

$usernames = $_POST['username'];
$passwords = $_POST['password'];
//include is php version of import
$sql = "SELECT * FROM users WHERE username = '{$usernames}' LIMIT 1";

$result = mysqli_query($conn, $sql);
$userObject = mysqli_fetch_assoc($result);
mysqli_close($conn);
if($passwords == $userObject['password'] ){
    $_SESSION['permission'] = 1;
    $_SESSION['userID'] = $userObject['id'];
    header("Location: profile.php?id={$userObject['id']}");
}else{
    header("Location: index.php");
}
