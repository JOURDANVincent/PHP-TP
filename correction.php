<?php

include('utils\regexp.php');

$errorsArray = array();

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

   // NAME
    // On verifie l'existance et on nettoie
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($name)){
        // On test la valeur
        $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$name);

        if($testRegex == false){
            $errorsArray['name_error'] = 'Le nom n\'est pas valide';
        }
    }else{
        $errorsArray['name_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************

    // FIRSTNAME
    // On verifie l'existance et on nettoie
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($firstname)){
        // On test la valeur
        $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$firstname);

        if($testRegex == false){
            $errorsArray['firstname_error'] = 'Le prénom n\'est pas valide';
        }
    }else{
        $errorsArray['firstname_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************

    // DATE D'ANNIVERSAIRE 
    // On verifie l'existance et on nettoie
    $birthDate = trim(filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($birthDate)){
        // On test la valeur
        $testRegex = preg_match(REGEXP_DATE,$birthDate);

        // On peut aller plus loin sur le test de la date à cet endroit

        if($testRegex == false){
            $errorsArray['birthDate_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
        }
    }else{
        $errorsArray['birthDate_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************
   
    // PAYS DE NAISSANCE
    // On verifie l'existance et on nettoie
    $birthCountry = trim(filter_input(INPUT_POST, 'birthCountry', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($birthCountry) ){
        // exemple pour tester les données venant d'une base de données
        // if($birthCountry != 'France' && $birthCountry != 'Italie' && $birthCountry != 'Grande Bretagne'){
        //     $errorsArray['birthCountry_error'] = 'Le champ ne correspond pas à la demande';
        // }

        // autre possibilité si les données attendues sont dans un tableau
        $country_array = array('France', 'Italie', 'Grande Bretagne');
        if(!in_array($birthCountry, $country_array)){
            $errorsArray['birthCountry_error'] = 'Le champ ne correspond pas à la demande';
        }
    
    }else{
        $errorsArray['birthCountry_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************
    
    // TELEPHONE
    // On verifie l'existance et on nettoie
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($phone)){
        // On test la valeur
        $testRegex = preg_match(REGEXP_PHONE,$phone);

        if($testRegex == false){
            $errorsArray['phone_error'] = 'Le numero n\'est pas valide, les séparateur sont - . /';
        }
    }

    // ***************************************************************
    
    // EMAIL
    // On verifie l'existance et on nettoie
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));

    //On test si le champ n'est pas vide
    if(!empty($mail)){
        // On test la valeur
        $testMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

        if($testMail == false){
            $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
        }
    }else{
        $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************

    // LIEN 
    // On verifie l'existance et on nettoie
    $link = trim(filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL));

    //On test si le champ n'est pas vide
    if(!empty($link)){
        // On test la valeur
        $testlink = filter_var($link, FILTER_VALIDATE_URL);

        if($testlink == false){
            $errorsArray['link_error'] = 'L\'Url n\'est pas valide, le format attendu est http://XXX.XX';
        }
    }

    // ***************************************************************
    
    // DIPLOME
    $diploma = trim(filter_input(INPUT_POST, 'diploma', FILTER_SANITIZE_STRING));

    // ***************************************************************

    // QUESTION 1
    $superhero = trim(filter_input(INPUT_POST, 'superhero', FILTER_SANITIZE_STRING));

    // ***************************************************************

    // Question 2
    $hack = trim(filter_input(INPUT_POST, 'hack', FILTER_SANITIZE_STRING));

    // ***************************************************************

    // ADRESSE
    $adress = trim(filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING));
    // ***************************************************************

    // NUMERO POLE EMPLOI
    $job_number = trim(filter_input(INPUT_POST, 'job_number', FILTER_SANITIZE_STRING));

    //On test si le champ n'est pas vide
    if(!empty($job_number)){
        // On test la valeur
        $testRegex = preg_match(REGEXP_POLE_EMPLOI,$job_number);

        if($testRegex == false){
            $errorsArray['job_number_error'] = 'Le numero n\'est pas valide, pensez aux majuscules !';
        }
    }

    // ***************************************************************

    // BADGE
    $badge_number = trim(filter_input(INPUT_POST, 'badge_number', FILTER_SANITIZE_NUMBER_INT));
    
    if(!empty($badge_number)){
        // On test la valeur
        $testnumber = filter_var($badge_number, FILTER_VALIDATE_INT);

        if($testnumber == false){
            $errorsArray['job_number_error'] = 'Le numero n\'est pas valide';
        }
    }




}


?>