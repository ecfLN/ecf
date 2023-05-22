<?php
require_once '.././php/test_session_log.php';

//dans tout les CAS ou le $session[role]et pas admin on rentre dans le if on est expluser
if($_SESSION['ROLE']!="ADMIN"){
    header('location:../index.php');
    exit();
}
?>
<div id="nav-conteneur">
    <nav>
        <div class="logo">
            <i class="fa-solid fa-desktop"></i>
        </div>
        <div class="toggler">
            <i class="fa-solid fa-bars ouvrir"></i>
            <i class="fa-solid fa-xmark fermer"></i>
        </div>
        <ul class="menu">
            <li>
                <a href="../index.php">Accueil</a>
            </li>
            
            <!-- a copier et a changer pour rajouter des liens -->
            <li>
                <a href="./admin.php">dashbord_users</a>
            </li>
            <!--
             pour faire d'autre lien de page admin si besoin   
            <li>
                <a href="#">#</a>
            </li> -->   
            
            <li>
                <a href="../deconnexion.php">DÃ©connexion</a>
            </li>    
        </ul>
    </nav>
</div> 