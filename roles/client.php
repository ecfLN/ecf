<?php
require_once './php/test_session_log.php';

//dans tout les CAS ou le $session[role]et pas USER on rentre dans le if on est expluser
if($_SESSION['ROLE']!="USER"){
    header('location:./index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <?php  
        // le nom de votre page ici qui sera afficher en haut de votre navigateur
        $titre= $email; 
        include_once './php/html_head.php';
    ?>    
    <body>
        <?php 
            include_once './php/html_menu.php';
        ?>
        <main>
            <!--le nom de votre page ici -->
            <h1> <?= $titre ?> </h1>
           <?php
                include_once './php/CRUD/read_users_client.php'
           ?>
        </main>
        <?php 
            include_once './php/html_footer.php';
        ?>
        <?php 
            include_once './php/html_script.php';
        ?>
    </body>
</html>