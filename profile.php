<?php
$serverName = "localhost";
$username = "root";
$password = "root";
$dbtable = "purple_pride";

$conn = mysqli_connect($serverName, $username, $password, $dbtable);

session_start();
if($_SESSION['permission'] !== 1){
header("Location: index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Purple Pride</title>
<style>
    .box{
        position: relative;
        display: inline-block; /* Make the width of box same as image */
        margin-left: 0;
        width: 100%;
    }
    .box .text{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 0;
        right: 0;
        text-align: center;
        top: 1%;
        font-family: Arial,sans-serif;
        color: white;
        width: 60%;
        font-size: 45px;
    }
    .box .tex{
        position: absolute;
        z-index: 999;
        margin: : 0 auto;
        left: 0;
        right: 0;
        text-align: center;
        top: 70%;
        font-family: Arial,sans-serif;
        color: white;
        width: 100%;
        font-size: 15px;
    }

  #box2 {
    height: 270px;
    width: 31%;
    background: #DCC1FC;
    border-radius: 25px;
    margin-bottom: 10px;
    margin-top: 20px;
    text-align: center;
    margin-left: 20px;
    float: left;
}

.cooltext {
  color: #DCC1FC;
  font-family: Arial,sans-sans-serif;
}
.whitetext {
  color: white;
  font-family: Arial,sans-sans-serif;
  margin-top: 10px;
}
.container{
  width: 100%;
}
</style>
</head>
<body>
    <nav>
         <form action="logout.php" method="post">
            <input style="margin-left: 1300px; margin-bottom: 10px; "type = "submit" value="Log Out">
         </form>
     </nav>

  <div class="box">
     	<img src="rainbowstreak.jpeg" alt="SPREAD THE LOVE" height = "400" width = "1435" border = "0" margin = "0">
         <div class="text">
             <h1>HOME</h1>
         </div>
     </div>
     <div class = "container">
     <div id = "box2">
       <h2 class = "whitetext">LATEST MESSAGE</h2>
       <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM Users WHERE id = '{$id}'";
                $result = mysqli_query($conn, $sql);
                $userObject = mysqli_fetch_assoc($result);
                $message = $userObject['message'];
        ?>
        <p class = "whitetext"><?php echo $message; ?></p>

      </div>
      <div id = "box2">
           <h2 class = "whitetext">SEND A MESSAGE</h2>
           <p class = "whitetext">PUT A SMILE ON SOMEONE'S FACE!</p>
          <form action="sendmessage.php" method="post" id="sending">
            <div>
              <textarea rows = "9" cols = "45" name = "message">
              </textarea><br>
          </div>
          <div>
            <input type="submit">
          </div>
          </form>
      </div>
      <div id = "box2">
        <h2 class = "whitetext">SHARE YOUR STORY</h2>
        <p class = "whitetext">WE'D LOVE TO HEAR FROM YOU!</p>
        <form action="sharestory.php" method="post" id="story">
          <div>
            <textarea rows = "9" cols = "45" name = "story">
            </textarea><br>
        </div>
        <div>
          <input type="submit">
        </div>
        </form>
      </div>
    </div>
  </div>


</body>
</html>
