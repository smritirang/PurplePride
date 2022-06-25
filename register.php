<?php
$serverName = "localhost";
$username = "root";
$password = "root";
$dbtable = "purple_pride";

$conn = mysqli_connect($serverName, $username, $password, $dbtable);
$usernames = $_POST['username'];
$passwords = $_POST['password'];
$info = $_POST['info'];
$sql = "INSERT INTO Users (username, password, information, message)
        VALUES ('{$usernames}', '{$passwords}', '{$info}', 'Welcomd to Purple Pride!')";

mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: index.php");

?>
