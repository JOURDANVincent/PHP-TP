<?php

    $alert = null;
    $formCheck = 'full';

    if (isset($_POST)) {

        foreach($_POST as $key => $value) {

            if(!empty($value)) {

                $value = valid_data($value);

            } else {

                $alert = 'Un ou plusieurs champs invalides ou vides..<br>Veuillez remplir tous les champs';
                $formCheck = 'invalid';
            }
        }
    }


    if ($formCheck == "full") {

        $lastname = null;
    }


    // ----------------------------------------- mes fonctions --------------------------------------------//

    function valid_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>tp1</title>
</head>

<body>

    <header>
        <div class="container mb-5">
            <h1>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :  </h1>
            <p>
                Nom
                Prénom
                Date de naissance
                Pays de naissance
                Nationalité
                Adresse
                E-mail
                Téléphone
                Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
                Numéro pôle emploi
                Nombre de badge
                Liens codecademy
                Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
                Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

                A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.
            </p>
        </div>
    </header>

    <main>

        <div class="container">

            <form class="row justify-content-center" action="#" method="post">
                <div class="form-group col-6 pt-3 bgForm">

                <div class="col-12 text-center titleAlert"><?= $alert ;?></div>

                    <fieldset class="mb-2">

                        <legend>Identité</legend>

                        <input class="form-control <?= (empty($_POST['firstName'])) ? 'bgError' : '' ;?> mb-2" type="text" name="firstName" placeholder="prénom" value="<?= (!empty($_POST['firstName'])) ? $_POST['firstName'] : '' ;?>"
                        pattern ="^[a-zA-Z\-][^0-9]{2,}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['firstName'])) ? '* champ obligatoire' : '' ;?></div>

                        <input class="form-control <?= (empty($_POST['lastName'])) ? 'bgError' : '' ;?> mb-2 mr-1" type="text" name="lastName" placeholder="lastName" value="<?= (!empty($_POST['lastName'])) ? $_POST['lastName'] : '' ;?>"
                        pattern ="^[a-zA-Z\-][^0-9]{2,}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['lastName'])) ? '* champ obligatoire' : '' ;?></div>

                        <div class="d-flex pr-1">
                            <input class="form-control <?= (empty($_POST['birthday'])) ? 'bgError' : '' ;?> col-4 mb-2 mr-1" type="text" name="birthday" placeholder="jj-mm-aaaa" value="<?= (!empty($_POST['birthday'])) ? $_POST['birthday'] : '' ;?>"
                            pattern = "^[0-9]{1,2}-[0-9]{1,2}-1[0-9]{3}$">
                            <input class="form-control <?= (empty($_POST['birthCountry'])) ? 'bgError' : '' ;?> col-8 mb-2" type="text" name="birthCountry" placeholder="pays de naissance" value="<?= (!empty($_POST['birthCountry'])) ? $_POST['birthCountry'] : '' ;?>"
                            pattern = "^[A-z]{2,}$">
                        </div>
                        <div class="d-flex">
                            <div class="regexAlert col-4 mb-2 mt-0"><?= (empty($_POST['birthday'])) ? '* champ obligatoire' : '' ;?></div>
                            <div class="regexAlert col-8 mb-2 mt-0"><?= (empty($_POST['birthCountry'])) ? '* champ obligatoire' : '' ;?></div>
                        </div>

                        <input class="form-control <?= (empty($_POST['nationality'])) ? 'bgError' : '' ;?> mb-2" type="text" name="nationality" placeholder="nationalité" value="<?= (!empty($_POST['nationality'])) ? $_POST['nationality'] : '' ;?>"
                        pattern ="^[A-z\ç\-]{2,}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['nationality'])) ? '* champ obligatoire' : '' ;?></div>

                    </fieldset>    

                    <fieldset class="mb-2">
                        <legend>Adresse</legend>
                        <div class="d-flex">
                            <input class="col-4 form-control mb-2 mr-1 <?= (empty($_POST['streetNumber'])) ? 'bgError' : '' ;?>" type="number" name="streetNumber" placeholder="N°" value="<?= (!empty($_POST['streetNumber'])) ? $_POST['streetNumber'] : '' ;?>"
                            pattern="^[0-9]{1,3}$">
                            <input class="col-8 form-control mb-2 <?= (empty($_POST['streetName'])) ? 'bgError' : '' ;?>" type="text" name="streetName" placeholder="nom de rue" value="<?= (!empty($_POST['streetName'])) ? $_POST['streetName'] : '' ;?>"
                            pattern ="^[a-zA-Z]{2,}$">
                        </div>
                        <div class="d-flex">
                            <div class="col-4 regexAlert mb-2 mt-0"><?= (empty($_POST['streetNumber'])) ? '* champ obligatoire' : '' ;?></div>
                            <div class="col-8 regexAlert mb-2 mt-0"><?= (empty($_POST['streetName'])) ? '* champ obligatoire' : '' ;?></div>
                        </div>
                        <div class="d-flex">
                            <input class="col-4 form-control mb-2 mr-1 <?= (empty($_POST['postalCode'])) ? 'bgError' : '' ;?>" type="number" name="postalCode" placeholder="code postal" value="<?= (!empty($_POST['postalCode'])) ? $_POST['postalCode'] : '' ;?>"
                            pattern ="^[0-9]{6}$">
                            <input class="col-8 form-control mb-2 <?= (empty($_POST['city'])) ? 'bgError' : '' ;?>" type="text" name="city" placeholder="ville" value="<?= (!empty($_POST['city'])) ? $_POST['city'] : '' ;?>"
                            pattern ="^[a-zA-Z\-]{2,}$">
                        </div>
                        <div class="d-flex">
                            <div class="col-4 regexAlert mb-2 mt-0"><?= (empty($_POST['postalCode'])) ? '* champ obligatoire' : '' ;?></div>
                            <div class="col-8 regexAlert mb-2 mt-0"><?= (empty($_POST['city'])) ? '* champ obligatoire' : '' ;?></div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-2">
                        <legend>Contact</legend>
                        <input class="form-control <?= (empty($_POST['mail'])) ? 'bgError' : '' ;?> mb-2 mr-1" type="mail" name="mail" placeholder="E-mail" value="<?= (!empty($_POST['mail'])) ? $_POST['mail'] : '' ;?>"
                        pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,5}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['mail'])) ? '* champ obligatoire' : '' ;?></div>

                        <input class="form-control <?= (empty($_POST['phone'])) ? 'bgError' : '' ;?> mb-2" type="phone" name="phone" placeholder="téléphone ex: 06xxxxxxxx" value="<?= (!empty($_POST['phone'])) ? $_POST['phone'] : '' ;?>"
                        pattern="^(0|\+33)[1-9]( *[0-9]{2}){4}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['phone'])) ? '* champ obligatoire' : '' ;?></div>
                    </fieldset>

                    <fieldset class="mb-2">
                        <legend>Diplômes</legend>

                        <select class="form-control <?= (empty($_POST['diplome'])) ? 'bgError' : '' ;?> mb-2" name="diplome" id="diplomeSelect">
                            <option value="">sélectionnes ton niveau..</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 0) ? 'selected' : '' ;?> value="0">sans</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 1) ? 'selected' : '' ;?> value="1">bac</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 2) ? 'selected' : '' ;?> value="2">bac+2</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 3) ? 'selected' : '' ;?> value="3">bac+3</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 4) ? 'selected' : '' ;?> value="4">>= bac+4</option>
                        </select>
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['diplome'])) ? '* champ obligatoire' : '' ;?></div>
        
                    </fieldset>

                    <fieldset class="mb-2">
                        <legend>Pôle emploi</legend>
                        <input class="form-control <?= (empty($_POST['poleNumber'])) ? 'bgError' : '' ;?> mb-2" type="number" name="poleNumber" placeholder="Numéro pôle emploi" value="<?= (!empty($_POST['poleNumber'])) ? $_POST['poleNumber'] : '' ;?>"
                        pattern ="^[0-9]{10}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['poleNumber'])) ? '* champ obligatoire' : '' ;?></div>
                    </fieldset>
                    
                    <fieldset class="mb-2">
                        <legend>Divers</legend>

                        <input class="form-control <?= (empty($_POST['bagdeQuantity'])) ? 'bgError' : '' ;?> mb-2 mr-1" type="number" name="badgeQuantity" placeholder="Nombre de badge" value="<?= (!empty($_POST['badgeQuantity'])) ? $_POST['badgeQuantity'] : '' ;?>"
                        pattern ="^[0-9]{1,3}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['bagdeQuantity'])) ? '* champ obligatoire' : '' ;?></div>

                        <input class="form-control <?= (empty($_POST['codeacademyLink'])) ? 'bgError' : '' ;?> mb-2" type="text" name="codeacademdyLink" placeholder="Liens codeacademy" value="<?= (!empty($_POST['codeacademdyLink'])) ? $_POST['codeacademdyLink'] : '' ;?>"
                        pattern ="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['codeacademyLink'])) ? '* champ obligatoire' : '' ;?></div>

                    </fieldset>

                    <fieldset class="mb-2">
                        <legend>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</legend>

                        <input class="form-control <?= (empty($_POST['whichHero'])) ? 'bgError' : '' ;?> mb-2" id="whichHero" type="text" name="whichHero" placeholder="quel héro ?" value="<?= (!empty($_POST['whichHero'])) ? $_POST['whichHero'] : '' ;?>"
                        pattern ="^[wW\-]{2,}$">
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['whichHero'])) ? '* champ obligatoire' : '' ;?></div>

                        <textarea class="form-control <?= (empty($_POST['whyThisHero'])) ? 'bgError' : '' ;?> mb-2" name="whyThisHero" id="whyThisHero" rows="3" placeholder="pourquoi ce héro ?" value="<?= (!empty($_POST['whyThisHero'])) ? $_POST['whyThisHero'] : '' ;?>"
                        pattern ="^[a-zA-Z\-]{2,}$"></textarea>
                        <div class="regexAlert mb-2 mt-0"><?= (empty($_POST['whyThisHero'])) ? '* champ obligatoire' : '' ;?></div>
                    </fieldset>
                    
                    <fieldset class="mb-2">
                        <legend>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</legend>
                        <div class="d-flex pl-3">
                            <div class="form-check mb-2 mr-1">
                                <input class="form-check-input" type="radio" name="hackSelect" id="hackSelectYes" value="yes">
                                <label class="form-check-label" for="hackSelect1">oui</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="hackSelect" id="hackSelectNo" value="no" checked>
                                <label class="form-check-label" for="hackSelect2">non</label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-center my-4">
                        <input class="btn btn-dark px-5" type="submit" value="envoyer">
                    </div>
                    
                </div>

                
            </form>

        </div>
    </main>

    <footer>
    </footer>


    <!-- script js CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- mes scripts -->

    
</body>

</html>