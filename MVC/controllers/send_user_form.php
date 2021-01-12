<?php 


    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['sendForm'])) {

        //récupère le tableau $form provanant de data.php
        $form = unserialize($_COOKIE['formData']);
        $mail = $form['mail'];

        $send_back = 'traitement en cours..';

        // envoie du formulaire par email
        $send_back = sendingForm($form, $mail);
    }

    //$send_back = sendingForm($form, $mail);


    // --------------------------------- fonction d'envoi du formulaire par email --------------------------------------//

    function sendingForm($data, $mail) {

        $destinataire = 'vincent.jourdan1183@orange.fr';
        // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
        $expediteur = $mail;
        //$expediteur = 'eocv7438@eocv7438.odns.fr';
        //$copie = 'adresse@fai.com';
        //$copie_cachee = 'adresse@fai.com';
        $objet = 'Formulaire d\'inscription'; // Objet du message
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
        //$headers .= 'Cc: '.$copie."\n"; // Copie Cc
        //$headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
        
        $msg ='';

        foreach($data as $key => $value) {

            $msg .= $key . ' : ' . $value . '<br>';
        }


        if (mail($destinataire, $objet, $msg, $headers)) // Envoi du message
        {
            $back = 'Votre message a bien été envoyé ';
        }
        else // Non envoyé
        {
            $back =  "Votre message n'a pas pu être envoyé";

        }

        //echo $back;

        return $back;
  
    }



?>