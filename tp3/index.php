<?php

    // déclaration variables
    $array_author = $array_data = [];

    // inclusion de la page de calcul
    include('controller.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Big+Shoulders+Stencil+Text:wght@300&family=Source+Code+Pro&display=swap" rel="stylesheet">
    
    <!-- mySHEET -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Document</title>
</head>
<body>

    <h1>
        Faire une fonction qui permet d'afficher les données des tableaux suivants :
    </h1>
    <p>
        $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
        $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
        $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
        $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

        Les afficher tous sur une même page.
    </p>

    <main>

        <div class="container">
            <div class="row justify-content-around py-5" style="box-shadow: 2px 2px 5px 2px #404040; border: 1px solid black;">
               
            <!-- on récupère les card à afficher -->
            <?php
                echo $card1->build_layout();
                echo $card2->build_layout();
                echo $card3->build_layout();
                echo $card4->build_layout();
            ?>
            <!-- on récupère les card à afficher -->

            </div>
        </div>

    </main>
    
    <!-- script js CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- mes scripts -->
    
</body>  <!-- fin BODY -->
</html> <!-- fin HTML -->