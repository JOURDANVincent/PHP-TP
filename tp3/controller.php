<?php

// déclaration des différents portraits à afficher
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'description' => 'Victor Hugo est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 7 ventôse an X à Besançon et mort le 22 mai 1885 à Paris. Il est considéré comme l\'un des plus importants écrivains de langue française.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'description' => 'Jean de La Fontaine, né le 8 juillet 1621 à Château-Thierry et mort le 13 avril 1695 à Paris, est un poète français de grande renommée, principalement pour ses Fables et dans une moindre mesure pour ses contes.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'description' => 'Pierre Corneille, aussi appelé « le Grand Corneille » ou « Corneille l\'aîné », né le 6 juin 1606 à Rouen et mort le 1ᵉʳ octobre 1684 à Paris, est un dramaturge et poète français du XVIIᵉ siècle. ', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'description' => 'Jean Racine est un dramaturge et poète français. Issu d\'une famille de petits notables de la Ferté-Milon et tôt orphelin, Racine reçoit auprès des « Solitaires » de Port-Royal une éducation littéraire et religieuse rare.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');


// création d'une class "card" servant de modèle pour l'affichage dynamique des données
class Card {

    // déclaration des variables privées de la class
    private $_name;
    private $_firstname;
    private $_description;
    private $_portrait;

    // fonction magique de contruction de l'objet card
    public function __construct($author) {
        
        $this->get_name($author['name']);  // appel fonction
        $this->get_firstname($author['firstname']);  // appel fonction
        $this->get_description($author['description']);  // appel fonction
        $this->get_picture($author['portrait']);  // appel fonction
    }

    public function get_name($name) { // on récupère le nom
        $this->_name = $name;
    }

    public function get_firstname($firstname) {  // on récupère le prénom
        $this->_firstname = $firstname;        
    }

    public function get_description($description) {  // on récupère l'image
        $this->_description = $description;
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
                    <h5 class="card-title">'.$this->_name.' '.$this->_firstname.'</h5>
                    <p class="card-text text-justify">'.$this->_description.'</p>
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