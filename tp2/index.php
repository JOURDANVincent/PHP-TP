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
    
    <title>TP2</title>
</head>
<body>

    <header>

        <div class="container">
            <div class="row">
                <div class="col-12">
                <h1>
                    Faire une page permettant de saisir les informations suivantes :
                </h1>
                <p>
                    Civilité (liste déroulante)
                        Nom
                        Prénom
                        Age
                        Société
                    A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.
                </p>
                </div>
            </div>
        </div>

    </header>


     <?php

        $errorList = [];

        include('controllers/controller.php');

        include('views/form.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorList)) {
        
            include('views/data.php');

        }


     ?>






        
    <!-- script js CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- mes scripts -->
    
</body>  <!-- fin BODY -->
</html> <!-- fin HTML -->