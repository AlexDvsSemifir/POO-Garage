<?php 
abstract class Vehicule {
    protected $moteur;
    private $marque;

    public function __construct($marque, $moteur) {
        $this->marque = $marque;
        $this->moteur = $moteur;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function avancer() {
        $this->moteur->augmenterTours();
        return "Le véhicule avance";
    }

    public function reculer() {
        $this->moteur->augmenterTours();
        return "Le véhicule recule";
    }

    public function freiner() {
        return "Le véhicule freine";
    }

    public function __toString()
    {
        return "Je suis un véhicule";
    }
}
?>