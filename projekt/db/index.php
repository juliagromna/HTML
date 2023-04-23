<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <title>index</title>
</head>

<body>
    <?php
        include_once('polaczenie.php');
        
        if(isset($_POST['name'])and isset($_POST['login'])and isset($_POST['pswd'])and isset($_POST['email'])){
        $n=$_POST['name'];
        $l=$_POST['login'];
        $pas=$_POST['pswd'];
        $m=$_POST['email'];
        
        $ask="select * from user where login='$l'; ";
        $wynik=mysqli_query($connect,$ask);
        if($wynik){
            if(mysqli_num_rows($wynik)>0){
                // echo "login zajęty";
                header('location:../register.php');
            }
            else{
                $sql2="insert into user(name,login,password,mail) values('$n','$l','$pas','$m')";
                $result2 = mysqli_query($connect, $sql2);

                if($result2) {echo ('Zapytanie wysłane poprawnie <br>');
                } else {
                echo ("Błąd zapytania: " . mysqli_error($connect) ."<br>");
                }
            }
        }
        else{
            echo "złe zapytanie";
        }
    
        
        mysqli_close($connect);
        header('location:../main.php');
    }else {header('location:../register.php');}
    ?>
</body>
</html>