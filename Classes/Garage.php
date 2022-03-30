<?php
class Garage {
    private $vehicules = [];
    private $garagistes = [];

    public function __construct() {
        $this->vehicules = [];
    }

    public function removeAVehicule($vehicule) {
        $key = array_search($vehicule, $this->vehicules);
        if ($key) {
            unset($this->vehicules[$key]);
        }
    }

    public function addVehicule(Vehicule $vehicule) {
        $this->vehicules[] = $vehicule;
    }

    public function getVehicules() {
        return $this->vehicules;
    }

    public function getVehicule($index) {
        return $this->vehicules[$index];
    }

    public function addGaragiste(Garagiste $garagiste) {
        $this->garagistes[] = $garagiste;
    }

    public function getGaragistes() {
        return $this->garagistes;
    }

    public function afficherTousLesVehicules() {
        foreach ($this->vehicules as $vehicule) {
            echo $vehicule . "<br>";
        }
    }
}
?>