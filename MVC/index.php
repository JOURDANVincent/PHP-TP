<?php

    // récupère header
    include('views/templates/header.php');


    // traitement des informations provenant du formulaire.
    $errorList = $form = [];

    // page de traitement des données du formulaire
    include("controllers/user_controller.php");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorList)) {

        // on affiche les données reçues du formulaire
        include("views/user_data.php");

    } else {

        // on affiche le formulaire tant qu'il y a des champs vides ou contenant des erreurs 
        include('views/user_form.php');

    }


    // récupère footer
    include('views/templates/footer.php');

?>