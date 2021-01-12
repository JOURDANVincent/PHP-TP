<?php
    
    $alert = $formCheck = null;
    $required = false;

    // ------------ contrôle de pattenr required -------------- //
    if(isset($_GET['required'])) {

        if($_GET['required'] == true) {
            $required = false;
        } else {
            $required = true;
        }

        //echo 'required : ' . $required;
    }

    // ---------------------------------- contrôle données envoyées -------------------------------------- //
    if (isset($_POST)) {

        foreach($_POST as $key => $value) {

            if(empty($value)) {

                $alert = 'Un ou plusieurs champs vides..<br>Veuillez remplir tous les champs';
                $errorList[$key] = '* champ obligatoire';
            } 

            else {   // création de variables dynmique  ${$key} = $value;  var_dump(${$key});

                $value = valid_data($value); 

                // contrôle des email
                if ($key == 'mail' && filter_var(filter_var($value, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL)) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_EMAIL);
                
                // contrôle des url
                } else if ($key == 'urlLink' && filter_var(filter_var($value, FILTER_SANITIZE_URL), FILTER_VALIDATE_URL)) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_URL);

                //controle date de naissance
                } else if ($key == 'birthday' && preg_match("/^[0-3]{1}[0-9]{1}\/[0-9]{1,2}\/(1?2?){1}[0-9]{3}$/", filter_var($value, FILTER_SANITIZE_STRING))) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);  

                //controle téléphone
                } else if ($key == 'phone' && preg_match("/^(0|\+33)[1-9]( *[0-9]{2}){4}$/", filter_var($value, FILTER_SANITIZE_STRING))) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);

                //controle code postal
                } else if ($key == 'postalCode' && preg_match("/^([0-9][0-5][0-9]{3})|(9[7-8][2-578][0-9]{2})$/", filter_var($value, FILTER_SANITIZE_STRING))) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);  

                //controle nom de rue
                } else if ($key == 'streetName' && preg_match("/^[a-zA-Z0-9\-\s]{2,}$/", filter_var($value, FILTER_SANITIZE_STRING))) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);

                //controle text
                } else if (($key == 'lastName'|| $key == 'firstName'|| $key == 'birthCountry'|| $key == 'nationality'|| $key == 'city'|| $key == 'whichHero') 

                    && preg_match("/^[a-zA-Z\-]{2,}$/", filter_var($value, FILTER_SANITIZE_STRING))) {
                        ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);

                //controle number
                } else if (($key == 'streetNumber'|| $key == 'badgeQuantity') && preg_match("/^[0-9]{1,3}$/", filter_var($value, FILTER_SANITIZE_NUMBER_INT)) && filter_var((filter_var($value, FILTER_SANITIZE_NUMBER_INT)), FILTER_VALIDATE_INT)) {
                        ${$key} = $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                
                // contrôle type de rue
                } else if ($key == 'streetType' 
                    && preg_match("/^[a-z]{2,3}$/", filter_var($value, FILTER_SANITIZE_STRING)) 
                    && (filter_var((filter_var($value, FILTER_SANITIZE_STRING) == 'rue'|| filter_var($value, FILTER_SANITIZE_STRING) == 'bvd'|| filter_var($value, FILTER_SANITIZE_STRING) == 'av'|| filter_var($value, FILTER_SANITIZE_STRING) == 'imp'|| filter_var($value, FILTER_SANITIZE_STRING) == 'chm'), FILTER_VALIDATE_INT))) {

                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);

                // contrôle diplome
                } else if ($key == 'diplome' && ($value == 'bac'|| $value == 'bac+1'|| $value == 'bac+2'|| $value == 'bac+3'|| $value == '>=bac+4')) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);

                // contrôle pole emploi
                } else if ($key == 'poleNumber' && preg_match("/^[0-9]{7}[A-Z]$/", filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS))) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);    

                // contrôle radio button
                } else if ($key == 'informatique' && (filter_var($value, FILTER_SANITIZE_STRING) == 'yes' || filter_var($value, FILTER_SANITIZE_STRING) == 'no')) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);
                
                // contrôle deschamps text area
                } else if (($key == 'hackExperience' || $key == 'whyThisHero') && (strlen(filter_var($value, FILTER_SANITIZE_STRING)) >= 20) && (strlen(filter_var($value, FILTER_SANITIZE_STRING)) <= 200)) {
                    ${$key} = $value = filter_var($value, FILTER_SANITIZE_STRING);


                // si la variable recue ne passe pas les contrôles ajout dan sliste d'erreur ...
                } else {
                    $errorList[$key] = '* La donnée envoyée ['. $value . '] est erronnée';

                    if ($alert == null) {
                        $alert = 'Une ou plusieures données eronnées..<br>Veuillez remplir corriger le/les champs';
                    } else {
                        $alert = 'Champs vides et eronnées..<br>Veuillez remplir corriger le/les champs';
                    }
                }

                $form[$key] = $value;

                // enregistrement du formulaire dan scookie
                setcookie('formData', serialize($form));
                $_COOKIE['formData'] = serialize($form);
                
            } 
        }
    } 


    // ----------------------------------------- mes fonctions --------------------------------------------//

    function valid_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



?>