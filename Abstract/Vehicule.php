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

    /**
     * Fait avancer le véhicule
     */
    public function avancer() {
        $this->moteur->augmenterTours();
        return "Le véhicule avance";
    }

    /**
     * Fait reculer le véhicule
     */
    public function reculer() {
        $this->moteur->augmenterTours();
        return "Le véhicule recule";
    }

    /**
     * Fait frêner le véhicule
     */
    public function freiner() {
        return "Le véhicule freine";
    }

    public function __toString()
    {
        return "Je suis un véhicule";
    }
}
?>