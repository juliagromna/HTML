<?php
    session_start();
    
    
    include_once("polaczenie.php");
    if(isset($_POST['log']) && isset($_POST['password'])){
        $login=$_POST['log'];
        $password=$_POST['password'];
        
        $ask="select *from user where login='$login' and password='$password';";
        $result=mysqli_query($connect,$ask);
        if($result){
            if(mysqli_num_rows($result)==1){
                // echo "zalogowano poprawnie";
                $_SESSION['login']=$login;
                $_SESSION['password']=$password;
                $_SESSION['log_in']=true;
                header('location:../main.php');
            } else header('location:../sign_in.php');
        } else {
            echo "Błąd zapytania";
        }
    }
?>