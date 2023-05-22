<?php
session_start();
// connexion
require_once './connect.php';
// function de securité
require_once '../security.php';

//evidament un CRUD pour UNE TABLE pour faire simple !! 


//on declare les variables de base 
$err=false;
$_SESSION['mail_error'] ='';
$_SESSION['pass_error'] ='';

if(empty($_POST['email'])){
    $_SESSION['mail_error']="entrer un email";
    $err=true;
}else{
    // on securise IMPORTANT avec le protect_montexte des INJECTION
    $email_ok = protect_montexte( $_POST['email']);

    if(!filter_var($email_ok,FILTER_VALIDATE_EMAIL)){
        $email_ok='';
        $_SESSION['mail_error']="mail invalide";
        $err=true;
    }
}
//  si c'est vide   ( || = OU )  si le password et de plus de 8 lettre
if(empty($_POST['password'])|| strlen($_POST['password'])<8){
    $_SESSION['pass_error'] ='mots de passe obligatoire (8 caractère minimum) ';
    $err=true;
}else{
    // on securise IMPORTANT avec le protect_montexte des INJECTION
    $pass = protect_montexte($_POST['password']);
}
//inserer ici si d'autre valeur si besoin
//inserer ici si d'autre valeur si besoin
//inserer ici si d'autre valeur si besoin



if(!$err){
    // on hash le mdp
    $pass_ok = password_hash($pass, PASSWORD_BCRYPT);


    // on cible la table  users avec la requete 
    // nombre de "?" egale au nombre de mots entre les () vous comprenez cette prhase ?
    $sql=" INSERT INTO users (email,mdp,ROLE,cgu) VALUES (?,?,?,?)";

    //  ici on prepare la requete
    // $stmt = $papa si je change sa change rien c est une synthaxe d ecriture defini pour faire des requete  ^^
    // ici le $stmt = mysqli_prepare($conn,$sql) on prepare une requete avec des fonction 
    if ($stmt = mysqli_prepare($conn,$sql)){
        //"sss"  = s pour si la valeur et un "STRING" 
        //"sss"  = i si la valeur et un "NUMBER"
        //pour l'ordre "ssss" metre la lettre 's' ou 'i' dans l'ordre des parametres
        mysqli_stmt_bind_param($stmt,"ssss",$param_email,$param_mdp,$param_role,$param_cgu);
        
        $param_cgu = $_POST['cgu'];
        $param_email = $email_ok ;
        $param_mdp = $pass_ok;
        $param_role = "USER";
        //inserer ici si d'autre valeur
        //inserer ici si d'autre valeur
        //inserer ici si d'autre valeur
    }
    // verification si la requete a reussi 
    if(mysqli_stmt_execute($stmt)){
        //on ferme la connection a la bdd
        mysqli_close($conn);
        // location redirige vers une page defini 
        header("location: ../../login.php");
        // exit si la location a pas fonctionner on securise on stop tout ^^
        exit();
    }
}else{
    header("location: ../../inscription.php");
    exit();
}

?>