<?php 
class Voiture extends Vehicule {
    public function __construct($marque, Moteur $moteur) {
        parent::__construct($marque, $moteur);
    }

    function __toString()
    {
        return "Je suis une voiture, je suis de marque " . $this->getMarque();
    }
}
?>