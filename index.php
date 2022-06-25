<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<title>Pride Palooza</title>
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
        top: 1%; /* Adjust this value to move the positioned div up and down */
        font-family: Arial,sans-serif;
        color: white;
        width: 60%; /* Set the width of the positioned div */
        font-size: 45px;
    }
    .box .tex{
        position: absolute;
        z-index: 999;
        margin: : 0 auto;
        left: 0;
        right: 0;
        text-align: center;
        top: 70%; /* Adjust this value to move the positioned div up and down */
        font-family: Arial,sans-serif;
        color: white;
        width: 100%; /* Set the width of the positioned div */
        font-size: 15px;
    }
    #box1 {
      height: 30px;
      width: 70px;
      background: #DCC1FC;
      border-radius: 25px;
      margin-bottom: 10px;
      margin-top: 5px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 50px;
  }
  #box2 {
    height: 270px;
    width: 30%;
    background: #DCC1FC;
    border-radius: 25px;
    margin-bottom: 10px;
    margin-top: 20px;
    text-align: center;
    margin-left: 20px;
    float: left;
}
#box3 {
  height: 270px;
  width: 30%;
  background: #DCC1FC;
  border-radius: 25px;
  margin-bottom: 10px;
  margin-top: 20px;
  text-align: center;
  margin-left: 20px;
  float: left;
}
#container {
  overflow: hidden;
  width: 100%;
}
#inner {
  overflow: hidden;
  width: 2000px;
}

.child {
  float: left;
  width: 200px;
  height: 50px;
}
.cooltext {
  color: #DCC1FC;
  font-family: Arial,sans-sans-serif;
}
.whitetext {
  color: white;
  font-family: Arial,sans-sans-serif;
}
</style>
</head>
<body>
    <nav>
         <form action="login.php" method="post">
           <div id = "container">
             <div id = "inner">
             <div class = "child">
                 <label class = "cooltext">Username</label>
                 <input type = "username" name = "username">
             </div>

             <div class = "child">
                 <label class = "cooltext">Password</label>
                 <input name = "password" type = "password">
             </div>
              </div>
            </div>
              <div id = "box1">
             <input type = "submit" value="Log In">
             </div>

         </form>
     </nav>

  <div class="box">
     	<img src="purple.png" alt="SPREAD THE LOVE" height = "400" width = "1435" border = "0" margin = "0">
         <div class="text">
             <h1>PURPLE PRIDE</h1>
         </div>
     </div>
     <div class = "container">
     <div id = "box2">
                    <h2 class = "whitetext" style = "margin-top: 20px; margin-bottom: 20px;">SIGN UP</h2>
                    <form action="register.php" method="post" id="registration">
                      <div>
                         <label class = "whitetext" style="margin-bottom: 5px;">USERNAME</label>
                      </div>
                         <div style="margin-bottom: 20px;">
                             <input name = "username" type = "username" placeholder="Set Username">
                         </div>
                         <div>
                           <label class = "whitetext" style="margin-bottom: 5px;">PASSWORD</label>
                         </div>
                         <div style="margin-bottom: 20px;">
                             <input name = "password" type = "password" placeholder="New password">
                         </div>
                         <div>
                           <label class = "whitetext" style="margin-bottom: 5px;">PRONOUNS</label>
                         </div>
                         <div style="margin-bottom: 20px;">
                             <input name = "info" type = "info" placeholder="Add info">
                         </div>
                         <div style="margin-bottom: 20px;">
                             <input type="submit">
                         </div>




                    </form>



          </div>
          <div id = "box3">
            <h2 class = "whitetext" style = "margin-top: 20px; margin-bottom: 20px;">VIEW STORIES!<h2>
            <p class = "whitetext">VIEW INSPIRATIONAL STORIES WRITTEN BY MEMBERS OF THE LGBTQ+ COMMUNITY. SIGN UP TO SHARE YOUR OWN!</p>
            <form action= "stories.php">
                 <input type="submit" value = "Let's Go!">
            </form>
          </div>
          <div id = "box2">
            <h2 class = "whitetext" style = "margin-top: 20px; margin-bottom: 20px;">QUOTE OF THE DAY<h2>
            <h3 class = "whitetext">Love and compassion are necessities, not luxuries. Without them, humanity cannot survive.</h3>
            <p class = "whitetext">Dalai Lama</p>
        </div>

</body>
</html>
