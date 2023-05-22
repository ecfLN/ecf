<?php
session_start();

if(isset($_SESSION['ROLE'])){
    // isset = si la session 'ROLE' existe alors je recupere le role
    $role = $_SESSION['ROLE'];
}else{
    // sinon mon role = '' 
$role='';
}
    // pour alex recuperer l'id ^^
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}

if(isset($_SESSION['connexion'])){
    $connect = $_SESSION['connexion'];
}else{
    // on est obliger de lui donner une valeur de base a $connect = "no" 
    // parce que l'on verifie dans le "html_menu.php" si yes ou no donc obliger 
    $connect = "no";
}

if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}else {
    $email ='';
}
  
// parce que l'on verifie dans le "inscription.php" si y a des erreur
if(isset($_SESSION['mail_error'])){
    $mail_error = $_SESSION['mail_error'];
}else{
    $mail_error ='';
}

// parce que l'on verifie dans le "inscription.php" si y a des erreur
if(isset($_SESSION['pass_error'])){
    $password_error =  $_SESSION['pass_error'];
}else{
    $password_error ='';
}

// a garder pour copier
//if(isset($_SESSION[''])){

// }else{

// }

?>