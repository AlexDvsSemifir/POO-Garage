<?php 
abstract class Personne {
    protected $age;
    protected $nom;

    public function __construct($nom, $age) {
        $this->age = $age;
        $this->nom = $nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getNom() {
        return $this->nom;
    }

    /**
     * Affichel es informations sur la personne
     * @return string
     */
    public function sePresenter() {
        return "Je m'appelle " . $this->nom . " et j'ai " . $this->age . " ans";
    }
}
?>