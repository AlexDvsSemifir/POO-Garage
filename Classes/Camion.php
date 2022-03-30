<?php 
class Camion extends Vehicule {
    public function __construct($marque, Moteur $moteur) {
        parent::__construct($marque, $moteur);
    }

    /**
     * Attache une remorque
     * @return string
     */
    public function attacherRemorque() {
        return "Le camion attache une remorque";
    }

    /**
     * Détache une remorque
     * @return string
     */
    public function detacherRemorque() {
        return "Le camion detache une remorque";
    }

    public function __toString()
    {
        return "Je suis un camion, je suis de marque " . $this->getMarque();
    }
}
?>