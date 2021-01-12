<?php

// déclaration des différents portraits à afficher
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');


// création d'une class "card" servant de modèle pour l'affichage dynamique des données
class Card {

    // déclaration des variables de la class
    private $_name;
    private $_firstname;
    private $_portrait;

    // fonction magique de contruction de l'objet card
    public function __construct($author) {
        
        $this->get_name($author['name']);  // appel fonction
        $this->get_firstname($author['firstname']);  // appel fonction
        $this->get_picture($author['portrait']);  // appel fonction
    }

    public function get_name($name) { // on récupère le nom
        $this->_name = $name;
    }

    public function get_firstname($firstname) {  // on récupère le prénom
        $this->_firstname = $firstname;        
    }

    public function get_picture($picture) {  // on récupère l'image
        $this->_portrait = $picture;
    }


    // création de la structure du modèle de carte
    public function build_layout() { 

        $card = '<div class="card col-5 my-3 mx-2 py-4" style="background-color: #999; box-shadow: 2px 2px 5px 2px #404040; border: 1px solid black; ">
                <div class="text-center">
                    <img src="'.$this->_portrait.'" class="card-img-top img-fluid" style="max-height:300px; max-width:300px; box-shadow: 2px 2px 5px 2px #404040; border: 1px solid black;" alt="photo de <'.$this->_firstname.' '.$this->_name.'">
                </div>
                <div class="card-body mt-3">
                    <h5 class="card-title">'.$this->_firstname.' '.$this->_name.'</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                </div>
            </div>';

        return $card;
    }
}


// création des cartes en fonction des portrait ...
$card1 =  new Card($portrait1);
$card2 =  new Card($portrait2);
$card3 =  new Card($portrait3);
$card4 =  new Card($portrait4);

?>