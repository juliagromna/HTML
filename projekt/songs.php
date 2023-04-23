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
      <div id="bcenter">
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-action maindivcolor">Music for a Sushi Restaurant
              <a href="https://www.youtube.com/watch?v=r5m6ScpU0yY&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=1" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
              <a href="https://open.spotify.com/track/5LYMamLv12UPbemOaTPyeV?si=520fa20264054331" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Late Night Talking           
            <a href="https://www.youtube.com/watch?v=RwT77rlp2CE&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=3" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/1qEmFfgcLObUfQm0j1W2CK?si=a843d7847331483b" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Grapejuice            
            <a href="https://www.youtube.com/watch?v=95pX92cUwV8&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=3" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/4j6kId9QIqhoXvqHKgSKa0?si=f69164f75bce447a" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">As It Was            
            <a href="https://www.youtube.com/watch?v=H5v3kku4y6Q&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=4" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/4Dvkj6JhhA12EX05fT7y2e?si=87cd25ff96ac43a4" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Daylight
            <a href="https://www.youtube.com/watch?v=MdLx4iINoMM&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=5" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/51Zw1cKDgkad0CXv23HCMU?si=6952d9d7fcca4b89" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Little Freak
            <a href="https://www.youtube.com/watch?v=hJpvI3w3tDc&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=6" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/3i058E8uxTsYqJ5NWZzqSj?si=ca350e00cabb4cb6" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Matilda
            <a href="https://www.youtube.com/watch?v=lVnzO7opqNs&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=7" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/6uvh0In7u1Xn4HgxOfAn8O?si=677ade05779e495e" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Cinema
            <a href="https://www.youtube.com/watch?v=_ecXNJP-ERY&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=8" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/35TyJIMR3xRouUuo2sjS6v?si=969c4387726d4db4" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Daydreaming
            <a href="https://www.youtube.com/watch?v=G2BYATpr4uY&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=9" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/69w5X6uTrOaWM32IetSzvO?si=91c65208b57a460d" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Keep Driving
            <a href="https://www.youtube.com/watch?v=qbcmsEIHWeE&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=10" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/2NcQic8JxdjAlAHuNbOIRE?si=12a63f4a055d488f" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Satellite           
            <a href="https://www.youtube.com/watch?v=o0LaNit1ts8&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=11" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/0rzaRSujxA0bKyjJl6vHYq?si=941afbe68ad14eb8" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Boyfriends
            <a href="https://www.youtube.com/watch?v=7o1EBarYGOs&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=12" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/6qj02zSeEJGWZ4c0dn5QzJ?si=e3b9c00fe537456b" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
          <li class="list-group-item list-group-item-action maindivcolor">Love of My Life
            <a href="https://www.youtube.com/watch?v=hkK5e7CY_h0&list=OLAK5uy_mlz0XdHjgFO8gVxdQD94aCHsEfpUlgJJ0&index=13" target="_blank"><img class="streambtn" style="position:absolute; right:65px; top:25%;" src="images/youtube.png" alt="youtube"></a>
            <a href="https://open.spotify.com/track/1mw0RgNXIpYRyyCdBQbLgA?si=dd5a0d8014d44146" target="_blank"><img class="streambtn" src="images/spotify.png" style="position:absolute; right:20px;top:15%;" alt="spotify"></a>
          </li>
        </ul>
      </div>
    </div>
</body>

</html>