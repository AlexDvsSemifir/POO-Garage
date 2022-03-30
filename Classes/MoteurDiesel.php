<?php 
class MoteurDiesel implements MoteurThermique, Moteur{
    public function augmenterTours() {
        echo "Augmenter les tours de ce moteur de diesel";
    }
    public function faireLePlein() {
        echo "Faire le plein de ce moteur de diesel";
    }
}
?>