<?php 
class MoteurElectrique implements Moteur {
    public function augmenterTours() {
        return "Augmenter les tours de ce moteur électrique";
    }

    /**
     * Recharge la batterie du véhicule
     */
    public function recharger() {
        return "Recharger de ce moteur électrique";
    }
}
?>