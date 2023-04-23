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
    <style>
      @media only screen and (max-width: 600px){
        #stream{
          text-align:center;
          top:0%;
        }
        #mainalbum{
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
        }
      }

      @media only screen and (min-width: 600px){
        #stream{
          position:relative;
          top:40%;
        }
        #mainalbum{
          float:right
        }
      }
      </style>

</head>

<body>
    
<div id="bc" class="container background rounded my-2" >

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
      <div class="container">
        <div class="row" >
          <div class="col-sm-6 my-5">
            <img id="mainalbum" class="img-thumbnail" style="width:400px;" src="images/harryshouse.jpg" alt="hsalbum">
          </div>
          <div class="col-sm-6 mb-4" >
            <div id="stream">
            <h1>Stream now</h1>
            <a href="https://open.spotify.com/album/5r36AJ6VOJtp00oxSkBZ5h?si=ZSpv5VFVT9y1ENC3wRghpA" target="_blank"><img style="width: 50px;" src="images/spotify.png" alt="spotify"></a>
            <a href="https://www.youtube.com/playlist?list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0" target="_blank"><img style="width: 50px;" src="images/youtube.png" alt="youtube"></a>
          </div>
          </div>
          </div>
        </div>
      </div>
</body>

</html>