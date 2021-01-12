<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Big+Shoulders+Stencil+Text:wght@300&family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Formulaire d'inscription en CDA</title>
</head>

<body>

    <header class="d-none">
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

                <div class="form-group col-12 col-lg-6 pt-3 mt-3 bgForm">

                    <!-- <h1 class="text-center mb-3">Formulaire d'inscription</h1> -->
                    <div class="col-12"><img class="img-fluid" src="assets/img/check2.png" alt="what !!!!!!"></div>
                    
                    <div class="col-12 text-right"><a class="text-danger" href="index.php?required=<?=$required?>"><?= $required ? 'Désactive JS REGEX' : 'Active JS REGEX'?></a></div>

                    <div class="col-12 my-3 text-center titleAlert"><?= $alert ;?></div>
                    

                    <!------------------------------------------ identité ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Identité</legend>

                        <input class="form-control <?= (isset($errorList['firstName'])) ? 'bgError' : '' ;?> mb-2" type="text" name="firstName" placeholder="prénom" value="<?= (!empty($_POST['firstName'])) ? $_POST['firstName'] : '' ;?>"
                        <?= $required ? 'required pattern ="^[a-zA-Z\-][^0-9]{2,}$" title="2 lettres mini / aucun chiffre ou caractères spéciaux"' : '' ?>>
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['firstName'] ?? '' ;?></div>

                        <input class="form-control <?= (isset($errorList['lastName'])) ? 'bgError' : '' ;?> mb-2 mr-1" type="text" name="lastName" placeholder="nom" value="<?= (!empty($_POST['lastName'])) ? $_POST['lastName'] : '' ;?>"
                        <?= $required ? 'required pattern ="^[a-zA-Z\-][^0-9]{2,}$" title="2 lettres mini / aucun chiffre ou caractères spéciaux"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['lastName'] ?? '' ;?></div>

                        <div class="d-flex pr-1">
                            <input class="form-control <?= (isset($errorList['birthday'])) ? 'bgError' : '' ;?> col-4 mb-2 mr-1" type="text" name="birthday" placeholder="jj-mm-aaaa" value="<?= (!empty($_POST['birthday'])) ? $_POST['birthday'] : '' ;?>"
                            <?= $required ? 'required pattern = "^[0-3]{1}[0-9]{1}\/[0-9]{1,2}\/(1?2?){1}[0-9]{3}$" title="format jj-mm-aaaa (ex: 20/12/1983)"' : '' ?> >
                            <input class="form-control <?= (isset($errorList['birthCountry'])) ? 'bgError' : '' ;?> col-8 mb-2" type="text" name="birthCountry" placeholder="pays de naissance" value="<?= (!empty($_POST['birthCountry'])) ? $_POST['birthCountry'] : '' ;?>"
                            <?= $required ? 'required pattern = "^[a-zA-Z\-][^0-9]{2,}$" title="2 lettres mini / aucun chiffre ou caractères spéciaux"' : '' ?> >
                        </div>
                        <div class="d-flex mt-0">
                            <div class="regexAlert col-4 mb-2 mt-0"><?= $errorList['birthday'] ?? '' ;?></div>
                            <div class="regexAlert col-8 mb-2 mt-0"><?= $errorList['birthCountry'] ?? '' ;?></div>
                        </div>

                        <input class="form-control <?= (isset($errorList['nationality'])) ? 'bgError' : '' ;?> mb-2" type="text" name="nationality" placeholder="nationalité" value="<?= (!empty($_POST['nationality'])) ? $_POST['nationality'] : '' ;?>"
                        <?= $required ? 'required pattern ="^[a-zA-Z\-][^0-9]{2,}$" title="2 lettres mini / aucun chiffre ou caractères spéciaux"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['nationality'] ?? '' ;?></div>

                    </fieldset>  
                    
                    
                    <!------------------------------------------ adresse ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Adresse</legend>
                        <div class="d-flex">
                            <input class="col-2 form-control mb-2 mr-1 <?= (isset($errorList['streetNumber'])) ? 'bgError' : '' ;?>" type="number" name="streetNumber" placeholder="N°..." value="<?= (!empty($_POST['streetNumber'])) ? $_POST['streetNumber'] : '' ;?>" 
                            min="1" <?= $required ? 'max="999" step="1" required pattern="^[0-9]{1,3}$" title="le numéro doit être compris entre 0 et 999"' : '' ?> >
                            
                            <select class="col-2 form-control mb-2 mr-2 <?= (isset($errorList['streetType'])) ? 'bgError' : '' ;?> mb-2" name="streetType" id="selectStreetType">
                                <option value="">...</option>
                                <option <?= (isset($_POST['streetType']) && $_POST['streetType'] == 'rue') ? 'selected' : '' ;?> value="rue">rue</option>
                                <option <?= (isset($_POST['streetType']) && $_POST['streetType'] == 'bvd') ? 'selected' : '' ;?> value="bvd">bvd</option>
                                <option <?= (isset($_POST['streetType']) && $_POST['streetType'] == 'av') ? 'selected' : '' ;?> value="av">av</option>
                                <option <?= (isset($_POST['streetType']) && $_POST['streetType'] == 'imp') ? 'selected' : '' ;?> value="imp">imp</option>
                                <option <?= (isset($_POST['streetType']) && $_POST['streetType'] == 'chm') ? 'selected' : '' ;?> value="chm">chm</option>
                            </select>

                            <input class="col form-control mb-2 ml-1 <?= (isset($errorList['streetName'])) ? 'bgError' : '' ;?>" type="text" name="streetName" placeholder="nom de rue" value="<?= (!empty($_POST['streetName'])) ? $_POST['streetName'] : '' ;?>"
                            <?= $required ? 'required pattern ="^[a-zA-Z0-9\-\s]{2,}$" title="2 lettres mini.. "' : '' ?> >
                        </div>
                        <div class="d-flex">
                            <div class="col-2 regexAlert mb-2 mt-0"><?= $errorList['streetNumber'] ?? '' ;?></div>
                            <div class="col-2 regexAlert mb-2 mt-0"><?= $errorList['streetType'] ?? '' ;?></div>
                            <div class="col-8 regexAlert mb-2 mt-0"><?= $errorList['streetName'] ?? '' ;?></div>
                        </div>
                        <div class="d-flex">
                            <input class="col-4 form-control mb-2 mr-1 <?= (isset($errorList['postalCode'])) ? 'bgError' : '' ;?>" type="text" name="postalCode" placeholder="code postal" value="<?= (!empty($_POST['postalCode'])) ? $_POST['postalCode'] : '' ;?>"
                            <?= $required ? 'required pattern ="^([0-9][0-5][0-9]{3})|(9[7-8][2-578][0-9]{2})$" title="ex: 80080"' : '' ?> >
                            <input class="col form-control mb-2 <?= (isset($errorList['city'])) ? 'bgError' : '' ;?>" type="text" name="city" placeholder="ville" value="<?= (!empty($_POST['city'])) ? $_POST['city'] : '' ;?>"
                            <?= $required ? 'required pattern ="^[a-zA-Z\-]{2,}$" title="2 lettres mini / aucun chiffre ou caractères spéciaux"' : '' ?> >
                        </div>
                        <div class="d-flex">
                            <div class="col-4 regexAlert mb-2 mt-0"><?= $errorList['postalCode'] ?? '' ;?></div>
                            <div class="col-8 regexAlert mb-2 mt-0"><?= $errorList['city'] ?? '' ;?></div>
                        </div>
                    </fieldset>


                    <!------------------------------------------ contact ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Contact</legend>
                        <input class="form-control <?= (isset($errorList['mail'])) ? 'bgError' : '' ;?> mb-2 mr-1" type="text" name="mail" placeholder="E-mail" value="<?= (!empty($_POST['mail'])) ? $_POST['mail'] : '' ;?>"
                        <?= $required ? 'required pattern="^[\w-\.]+@([\w-]+\.)+\.[\w-]{2,5}$" title="ex: contact@moi.fr"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['mail'] ?? '' ;?></div>

                        <input class="form-control <?= (isset($errorList['phone'])) ? 'bgError' : '' ;?> mb-2" type="phone" name="phone" placeholder="téléphone (ex: 06xxxxxxxx ou +3322334455)" value="<?= (!empty($_POST['phone'])) ? $_POST['phone'] : '' ;?>"
                        <?= $required ? 'required pattern="^(0|\+33)[1-9]( *[0-9]{2}){4}$" title="ex: 06-12-34-56-78 ou +336-12-34-56-78"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['phone'] ?? '' ;?></div>
                    </fieldset>

                    <fieldset class="mb-2">
                        <legend>Diplômes</legend>

                        <select class="form-control <?= (isset($errorList['diplome'])) ? 'bgError' : '' ;?> mb-2" name="diplome" id="diplomeSelect">
                            <option value="">sélectionnes ton niveau..</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 'sans') ? 'selected' : '' ;?> value="sans">sans</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 'bac') ? 'selected' : '' ;?> value="bac">bac</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 'bac+2') ? 'selected' : '' ;?> value="bac+2">bac+2</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == 'bac+3') ? 'selected' : '' ;?> value="bac+3">bac+3</option>
                            <option <?= (isset($_POST['diplome']) && $_POST['diplome'] == '>=bac+4') ? 'selected' : '' ;?> value=">=bac+4">>= bac+4</option>
                        </select>
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['diplome'] ?? '' ;?></div>
        
                    </fieldset>


                    <!------------------------------------------ pole emploi ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Pôle emploi</legend>
                        <input class="form-control <?= (isset($errorList['poleNumber'])) ? 'bgError' : '' ;?> mb-2" type="text" name="poleNumber" placeholder="Numéro pôle emploi" value="<?= (!empty($_POST['poleNumber'])) ? $_POST['poleNumber'] : '' ;?>"
                        <?= $required ? 'required pattern ="^[0-9]{7}[A-Z]$" title="le numéro doit contenir 7 chiffres et une lettre"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['poleNumber'] ?? '' ;?></div>
                    </fieldset>
                    
                    
                    <!------------------------------------------ divers ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Divers</legend>
                        <input class="form-control <?= (isset($errorList['badgeQuantity'])) ? 'bgError' : '' ;?> mb-2 mr-1" type="number" name="badgeQuantity" placeholder="Nombre de badge" value="<?= (!empty($_POST['badgeQuantity'])) ? $_POST['badgeQuantity'] : '' ;?>"
                        min="1" <?= $required ? 'max="999" step="1" required pattern ="^[0-9]{1,3}$" title="le nombre doit être compris entre 1 et 999"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['badgeQuantity'] ?? '' ;?></div>
                    </fieldset>


                    <!------------------------------------------ lien url ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Liens vers site web / projet</legend>
                        <input class="form-control <?= (isset($errorList['urlLink'])) ? 'bgError' : '' ;?> mb-2" type="text" name="urlLink" placeholder="Liens Code Academy" value="<?= (!empty($_POST['urlLink'])) ? $_POST['urlLink'] : '' ;?>" 
                        <?= $required ? 'required pattern ="^(http(s)?://)?([\w-])+.{1}([a-zA-Z]{2,63})([/\w-])/???([^#\n\r])?#?([^\n\r])$" title="Mauvais format d\'URL"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['urlLink'] ?? '' ;?></div>
                    </fieldset>


                    <!------------------------------------------ héro ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</legend>

                        <input class="form-control <?= (isset($errorList['whichHero'])) ? 'bgError' : '' ;?> mb-2" id="whichHero" type="text" name="whichHero" placeholder="quel héro ?" value="<?= (!empty($_POST['whichHero'])) ? $_POST['whichHero'] : '' ;?>"
                        <?= $required ? 'required pattern ="^[\w\W]{2,}$" title="ex: Batman"' : '' ?> >
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['whichHero'] ?? '' ;?></div>

                        <textarea class="form-control <?= (isset($errorList['whyThisHero'])) ? 'bgError' : '' ;?> mb-2" name="whyThisHero" id="whyThisHero" rows="3" placeholder="pourquoi ce héro ?"
                        <?= $required ? 'required minlength="20" maxlength="100" autocomplete' : ''?>><?= (!empty($_POST['whyThisHero'])) ? $_POST['whyThisHero'] : '' ;?></textarea>
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['whyThisHero'] ?? '' ;?></div>
                    </fieldset>


                    <!------------------------------------------ hackeur ------------------------------------------------>
                    <fieldset class="mb-2">
                        <legend>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</legend>
                        <textarea class="form-control <?= (isset($errorList['hackExperience'])) ? 'bgError' : '' ;?> mb-2" name="hackExperience" id="hackExperience" rows="3" placeholder="racontes ta meilleure experience.."
                        <?= $required ? 'required minlength="20" maxlength="100" autocomplete' : ''?>><?= (!empty($_POST['hackExperience'])) ? $_POST['hackExperience'] : '' ;?></textarea>
                        <div class="regexAlert mb-2 mt-0 pl-3"><?= $errorList['hackExperience'] ?? '' ;?></div>
                    </fieldset>
                    

                    <!------------------------------------------ informatique ------------------------------------------------>
                    <fieldset class="mb-2 text-center">
                        <legend>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</legend>
                        <div class="form-check-inline px-3 pt-2 <?= (isset($errorList['informatique'])) ? 'bgError' : '' ;?>">
                            <input type="hidden" name="informatique" value="<?= (isset($_POST['informatique'])) ? '' : 'unchecked' ;?>">
                            <div class="form-check mb-2 mr-1">
                                <input <?= (isset($_POST['informatique']) && $_POST['informatique'] == 'yes') ? 'checked' : '' ;?> class="form-check-input" type="radio" name="informatique" id="informatiqueYes" value='yes'>
                                <label class="form-check-label" for="informatiqueYes">oui</label>
                            </div>
                            <div class="form-check mb-2">
                                <input <?= (isset($_POST['informatique']) && $_POST['informatique'] == 'no') ? 'checked' : '' ;?> class="form-check-input" type="radio" name="informatique" id="informatiqueNo" value='no'>
                                <label class="form-check-label" for="informatiqueNo">non</label>
                            </div>
                        </div>
                        <div class="regexAlert mb-2 mt-0"><?= (isset($errorList['informatique'])) ? '* choix obligatoire' : '' ;?></div>
                    </fieldset>


                    <!------------------------------------------ submit ------------------------------------------------>
                    <div class="text-center my-4">
                        <input class="btn bg3 px-5" type="submit" value="envoyer">
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