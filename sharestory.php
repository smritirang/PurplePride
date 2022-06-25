<?php
session_start();
$serverName = "localhost";
$username = "root";
$password = "root";
$dbtable = "purple_pride";

$conn = mysqli_connect($serverName, $username, $password, $dbtable);
$story = $_POST['story'];
$userID = $_SESSION["userID"];
$sql = "INSERT INTO stories (posterID, post, likes)
        VALUES ('{$userID}', '{$story}', '0')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: stories.php?id={$userID}")
?>
