<?php
require_once './ECF/securite_et_tests/test_session_log.php';

?>
<!DOCTYPE html>
<html lang="fr">
    <?php  
        // le nom de votre page ici qui sera afficher en haut de votre navigateur
        $titre='Accueil'; 
        include_once './php/html_head.php';
    ?>    
    <body>
        <?php 
            include_once './php/html_menu.php';
        ?>
        <main>
            <!--le nom de votre page ici -->
            <h1> <?= $titre ?> </h1>
           
                    <!-- votre contenue ici -->
                    <!-- votre contenue ici -->
                    <!-- votre contenue ici -->
                    <!-- votre contenue ici -->
          
        </main>
        <?php 
            include_once './php/html_footer.php';
        ?>
        <?php 
            include_once './php/html_script.php';
        ?>
    </body>
</html>