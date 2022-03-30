<?php 
class Garagiste extends Personne {
    private $vehicule;

    public function __construct($nom, $age) {
        parent::__construct($nom, $age);
    }

    public function sePresenter() {
        return "Je suis le garagiste " . parent::sePresenter();
    }

    /**
     * Présente le garage ?
     */
    public function presenterGarage() {
    }

    /**
     * Permet au conducteur de conduire un véhicule
     * @param Vehicule $vehicule : Véhicule à conduire
     * @return string
     */
    public function conduire(Vehicule $vehicule) {
        $this->vehicule = $vehicule;
        return "Je conduis le véhicule de marque " . $vehicule->getMarque();
    }

    public function __toString()
    {
        return "Je suis un garagiste, mon nom est" . $this->getNom() . "et j'ai " . $this->getAge() . "ans";
    }
}
?>