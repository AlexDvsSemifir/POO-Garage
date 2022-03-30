<?php 
interface MoteurThermique extends Moteur {

    public function augmenterTours();

    /**
     * Faire le plein d'essence du véhicule
     */
    public function faireLePlein();
}
?>