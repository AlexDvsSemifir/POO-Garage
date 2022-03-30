<?php 
class Camion extends Vehicule {
    public function __construct($marque, Moteur $moteur) {
        parent::__construct($marque, $moteur);
    }

    public function attacherRemorque() {
        return "Le camion attache une remorque";
    }

    public function detacherRemorque() {
        return "Le camion detache une remorque";
    }

    public function __soString()
    {
        return "Je suis un camion, je suis de marque " . $this->getMarque() . "et mon moteur est de type " . $this->moteur->getType();
    }
}
?>