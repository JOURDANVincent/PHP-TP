<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $gender = trim(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));

        if (empty($gender)) {

            $errorList['gender'] = 'fais un choix !!!';
        }

        
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));

        if (empty($name)) {

            $errorList['name'] = 'champ obligatoire';

        } else {
            
            if (!preg_match("/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$/" ,$name)) {

                $errorList['name'] = 'données invalides';
            }
        }

        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));

        if (empty($firstname)) {

            $errorList['firstname'] = 'champ obligatoire';

        } else {
            
            if (!preg_match("/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$/" ,$firstname)) {

                $errorList['firstname'] = 'données invalides';
            }
        }


        $age = trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT));

        if (!empty($age) && ($age < 1 || $age > 140)) {

            $errorList['age'] = 'données invalides';
        }


        $company = trim(filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

        if (empty($company)) {

            $errorList['company'] = 'champ obligatoire';

        }


        
    }
?>