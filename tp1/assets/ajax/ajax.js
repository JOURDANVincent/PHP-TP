$("#sendFormToMail").click(function(e){
    e.preventDefault();
    console.log('demande d\'envois ajax');
    //$("#sendBack").load('envoi du formulaire en cours..'); // contenu.html se trouve au même niveau dans l’arborescence.
  
    $.ajax({
        url : 'assets/ajax/send_form_to_mail.php', // La ressource ciblée
        type : 'POST', // Le type de la requête HTTP.
        data : 'sendForm=send' , // On fait passer nos variables, exactement comme en GET, au script more_com.php    
        success : function(code_html, statut){ // success est toujours en place, bien sûr !
            console.log(statut);
            //$("#sendBack").load('<span>envoi réussi !!</span>');      
        },

        error : function(resultat, statut, erreur){
            console.log(erreur);
            //$("#sendBack").load("erreur : " + erreur + "envoi impossible !!"); 
        }
     
    });
});

