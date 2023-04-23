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
      <img class="img-fluid rounded" src="images/loveontour.jpg" alt="hslot2022">

      <div class="container mt-3">           
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Place</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Glasgow, UK, Ibrox Stadium</td>
              <td>Saturday, 11 JUNE</td>
            </tr>
            <tr>
              <td>Manchester, UK, Emirates Old Trafford</td>
              <td>Wednesday, 15 JUNE</td>
            </tr>
            <tr>
              <td>London, UK, Wembley Stadium Connected to EE</td>
              <td>Saturday, 18 JUNE</td>
            </tr>
            <tr>
              <td>Dublin, Ireland, Aviva Stadium</td>
              <td>Wednesday, 22 JUNE</td>
            </tr>
            <tr>
              <td>Hamburg, Germany, Volksparkstadion</td>
              <td>Sunday, 26 JUNE</td>
            </tr>
            <tr>
              <td>Stockholm, Sweden, Tele2 Arena</td>
              <td>Wednesday, 29 JUNE</td>
            </tr>
            <tr>
              <td>Oslo, Norway, Telenor Arena</td>
              <td>Friday, 1 JULY</td>
            </tr>
            <tr>
              <td>CANCELLED<br>Copenhagen, Denmark, Royal Arena</td>
              <td>Sunday, 3 JULY</td>
            </tr>
            <tr>
              <td>Paric, France, Accor Arena</td>
              <td>Tuesday, 5 JULY</td>
            </tr>
            <tr>
              <td>Antwerp, Belgium, Sportpaleis</td>
              <td>Thursday, 7 JULY</td>
            </tr>
            <tr>
              <td>Amsterdam, Netherlands, Ziggo Dome</td>
              <td>Saturday, 9 JULY</td>
            </tr>
            <tr>
              <td>Munich, Germany, Olympiahalle</td>
              <td>Monday, 11 JULY</td>
            </tr>
            <tr>
              <td>Budapest, Hungary, Budapest Arena</td>
              <td>Wednesday, 13 JULY</td>
            </tr>
            <tr>
              <td>Prague, Czech Republic, O2 Arena</td>
              <td>Friday, 15 JULY</td>
            </tr>
            <tr>
              <td>Vienna, Austria, Stadthalle</td>
              <td>Saturday, 16 JULY</td>
            </tr>
            <tr>
              <td>Krakow, Poland, Tauron Arena</td>
              <td>Monday, 18 JULY</td>
            </tr>
            <tr>
              <td>Berlin, Germany, Mercedes-Benz Arena</td>
              <td>Wednesday, 20 JULY</td>
            </tr>
            <tr>
              <td>Cologne, Germany, Lanxess Arena</td>
              <td>Friday, 22 JULY</td>
            </tr>
            <tr>
              <td>Bologna, Italy, Unipol Arena</td>
              <td>Monday, 25 JULY</td>
            </tr>
            <tr>
              <td>Turin, Italy, Pala Alpitour</td>
              <td>Tuesday, 26 JULY</td>
            </tr>
            <tr>
              <td>Madrid, Spain, Wizink Center</td>
              <td>Friday, 29 JULY</td>
            </tr>
            <tr>
              <td>Lisbon, Portugal, Altice Arena</td>
              <td>Sunday, 31 JULY</td>
            </tr>
            <tr>
              <td>Guadalajara, Mexico, Arena FVG</td>
              <td>Sunday, 20 NOVEMBER</td>
            </tr>
            <tr>
              <td>Monterrey, Mexico, Arena Monterrey</td>
              <td>Tuesday, 22 NOVEMBER</td>
            </tr>
            <tr>
              <td>Mexico City, Mexico, Foro Sol</td>
              <td>Friday, 25 NOVEMBER</td>
            </tr>
            <tr>
              <td>Bogota, Colombia, Parque Salitre Magico</td>
              <td>Sunday, 27 NOVEMBER</td>
            </tr>
            <tr>
              <td>Lima, Peru, Jockey Club</td>
              <td>Tuesday, 29 NOVEMBER</td>
            </tr>
            <tr>
              <td>Santiago, Chile, Estadio Bicentenario la Florida</td>
              <td>Thursday, 1 DECEMBER</td>
            </tr>
            <tr>
              <td>Buenos Aires, Argentina, Estadio River Plate</td>
              <td>Saturday, 3 DECEMBER</td>
            </tr>
            <tr>
              <td>Sao Paulo, Brazil, Allianz Parque</td>
              <td>Tuesday, 6 DECEMBER</td>
            </tr>
            <tr>
              <td>Rio de Janeiro, Brazil, Area Externa da Jeunesse Arena</td>
              <td>Thursday, 8 DECEMBER</td>
            </tr>
            <tr>
              <td>Curitiba, Brazil, Pedreira Paulo Leminski</td>
              <td>Saturday, 10 DECEMBER</td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </div>
</body>

</html>