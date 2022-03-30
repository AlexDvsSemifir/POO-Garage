<?php 
class MoteurEssence implements MoteurThermique, Moteur {
    public function augmenterTours() {
        return "Augmenter les tours de ce moteur d'essence";
    }
    public function faireLePlein() {
        return "Faire le plein de ce moteur d'essence";
    }
}
?>