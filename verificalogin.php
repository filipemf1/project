<?php
include_once('config.php');

session_start();
$email = $_POST['email'];
$hashemail = $_SESSION['emaillog'];
$senha = $_POST['senha'];
$hash = $_SESSION['senha'];
$verifica = mysqli_query($con, "SELECT email and senha FROM cadastro WHERE emaillog = '$hashemail' AND senha = '$hash'") or die ("erro ao selecionar");
$numlinha = mysqli_num_rows($verifica);
if($numlinha == 0){
        
    include_once('login.php');
        echo "<script>alert('login e/ ou senha incorretos'); history.back(email);</script>";
}
if(password_verify($email, $hashemail)){
        if(password_verify($senha, $hash)){
        header("location:enviado.php");
        }
else{
        include_once('login.php');
        echo "<script>alert('login e/ ou senha incorretos'); history.back(email);</script>";
}
}
else{
        include_once('login.php');
        echo "<script>alert('login e/ ou senha incorretos'); history.back(email);</script>";
}

?>