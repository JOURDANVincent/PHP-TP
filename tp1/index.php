<?php 

    // traitement des informations provenant du formulaire.
    $errorList = $form = [];

    // pade de traitement des données du formulaire
    include("traitment.php");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorList)) {

        // on affiche les données reçues du formulaire
        include("data.php");

    } else {

        // on affiche le formulaire tant vide ou contient erreurs
        include("form.php");

    }


?>