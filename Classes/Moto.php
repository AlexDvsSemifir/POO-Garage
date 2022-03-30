<?php 
class Moto extends Vehicule {
    public function __construct($marque, Moteur $moteur) {
        parent::__construct($marque, $moteur);
    }

    public function faireUnWheeling() {
        return "La moto fait un wheeling";
    }

    public function __toString()
    {
        return "Je suis une moto, je suis de marque " . $this->getMarque();
    }
}
?>