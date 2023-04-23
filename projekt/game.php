<?php
    session_start();
?>

<!doctype html>
<html lang="pl">

<head>
    <title> Harry's House </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
<div id="bc" class="container background rounded my-2">
<div class="container ">
    <?php
    if(isset($_SESSION['log_in'])==true){
      echo "<p style='color:rgb(125, 118, 87);text-align:center;position:relative;top:7px;'>Welcome ".$_SESSION['login']."</p>";
    }
      ?>
  </div>

    <nav id="navbar" class="navbar navbar-expand-sm rounded navbar-light sticky-top">
      <div class="container-fluid">  
       
          <a class="navbar-brand" href="main.php">
              <img id="door" src="images/door.png" alt="door"> 
            </a>
            <button class="navbar-toggler btncolor" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link link" href="songs.php">Songs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link" href="lyrics.php">Lyrics</a>
          </li>
          <li class="nav-item">
              <a class="nav-link link" href="love_on_tour.php">Love on Tour 2022</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="game.php">Game</a>
            </li>

            <?php
            include_once('db/polaczenie.php');
            if(isset($_SESSION['log_in'])==true){
                echo '<li id="sign_in" class="nav-item">
                <a class="nav-link link" href="db/log_out.php">Log out</a>
              </li>';
            }
            else{
                echo '<li id="sign_in" class="nav-item">
                <a class="nav-link link" href="sign_in.php">Sign in</a>
              </li>';
            }
            ?>

            
        </ul>
        </div>
      </div>
    </nav>
      <div class="container-fluid d-flex align-items-center justify-content-center">
        <canvas id="my_canvas" class="my-4"  width=400 height=300></canvas>
    </div>
    <div class=" container-fluid d-flex align-items-center justify-content-center">
        <button id="startbtn" type="button" class="btn btn-outline-secondary btncolor">START</button>
    </div>
    <br>
    
    <script src="game.js"></script>

    </div>
</body>

</html>