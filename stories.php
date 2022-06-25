
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Purple Pride</title>

    </head>
    <body id="profile-about">

        <nav>
          <div class = "container">
             <form action="logout.php" method="post">
                <input style="margin-left: 1300px; margin-bottom: 10px; "type = "submit" value="Log Out">
             </form>
             <form action="profile.php?id=<?php echo $_GET['id']?>" method="post">
                <input style="margin-left: 1300px; margin-bottom: 10px; "type = "submit" value="Home">
             </form>
           </div class = "container">
         </nav>
         <style>
         body {
           background-image: url('celebrate.jpeg');
         }
           .container{
             width: 100%;
           }
           #box2 {
             height: 270px;
             width: 20%;
             background: #DCC1FC;
             border-radius: 25px;
             margin-bottom: 10px;
             margin-top: 20px;
             text-align: center;
             margin-left: 20px;
             float: left;
         }
         .whitetext {
           color: white;
           font-family: Arial,sans-sans-serif;
           margin-top: 10px;
         }
         </style>
         <h1 class = "whitetext" style="font-size:80px; margin-left: 370px;">STORIES</h1>
        <div class="container">
            <div id="profile-friends">
                <div class="about__title">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div class = "container">
                    <?php
                        $serverName = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbtable = "purple_pride";

                        $conn = mysqli_connect($serverName, $username, $password, $dbtable);

                        $sql = "SELECT * FROM stories";
                        $result = mysqli_query($conn, $sql);
                        $stories = array();
                        while($storyObject = mysqli_fetch_assoc($result)){
                            $stories[] = $storyObject['post'];
                        }

                    ?>
                    <?php for($i = 0; $i < count($stories); $i++):?>

                        <div id = "box2">
                                <a><h3 class = "whitetext"><?php echo $stories[$i]; ?></h3></a>
                        </div>
                    <?php endfor;?>


                </div>

            </div>

        </div>

    </body>
</html>
