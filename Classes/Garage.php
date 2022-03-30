<?php
class Garage {
    private $vehicules = [];
    private $garagistes = [];

    public function __construct() {
        $this->vehicules = [];
    }

    /**
     * Retire un véhicule spécifique du garage
     */
    public function removeAVehicule($vehicule) {
        $key = array_search($vehicule, $this->vehicules);
        if ($key) {
            unset($this->vehicules[$key]);
        }
    }

    /**
     * Ajoute un véhicule au garage
     */
    public function addVehicule(Vehicule $vehicule) {
        $this->vehicules[] = $vehicule;
    }

    /**
     * Affiche la liste des véhicules
     * @return string
     */
    public function getVehicules() {
        return $this->vehicules;
    }

    /**
     * Affiche un véhicule spécifique
     */
    public function getVehicule($index) {
        return $this->vehicules[$index];
    }

    /**
     * Ajoute un garagiste au garage
     */
    public function addGaragiste(Garagiste $garagiste) {
        $this->garagistes[] = $garagiste;
    }

    public function getGaragistes() {
        return $this->garagistes;
    }

    /**
     * Affiche tous les véhicules du garage
     */
    public function afficherTousLesVehicules() {
        foreach ($this->vehicules as $vehicule) {
            echo $vehicule . "<br>";
        }
    }
}
?>