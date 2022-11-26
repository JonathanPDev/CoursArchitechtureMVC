<?php

    // routeur
    require('controller/controller.php');

    if (isset($_GET['page'])) {

        if($_GET['page'] == 'accueil') {
            home();
        } 
        elseif ($_GET['page'] == 'avis') {
            avis();
        }
    }
    else {
        home();
    }


    
?>
