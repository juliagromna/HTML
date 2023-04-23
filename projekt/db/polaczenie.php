<?php

$connect = mysqli_connect('localhost','julia.gromna','prosiaczek@1234','julia.gromna');

if(!$connect) {
    echo('NIE MOŻNA POŁĄCZYĆ SIĘ Z BAZĄ DANYCH' . mysqli_connect_error() . "<br>");
}
else{
    // echo('Połączono poprawnie <br>');
}



?>