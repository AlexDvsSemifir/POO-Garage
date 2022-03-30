<?php 
    require_once './Interfaces/Moteur.php';
    require_once './Interfaces/MoteurThermique.php';

    require_once './Abstract/Vehicule.php';
    require_once './Abstract/Personne.php';

    require_once './Classes/Camion.php';
    require_once './Classes/Garage.php';
    require_once './Classes/Garagiste.php';
    require_once './Classes/MoteurElectrique.php';
    require_once './Classes/MoteurDiesel.php';
    require_once './Classes/MoteurEssence.php';
    require_once './Classes/Voiture.php';
    require_once './Classes/Moto.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Garage</title>
</head>
<body>
    
<h1>Exercice Garage</h1>

<h2>Moteurs</h2>

<?php 
$moteurEssence = new MoteurEssence(100);
$moteurElectrique = new MoteurElectrique(100);
$moteurDiesel = new MoteurDiesel(100);
?>

<h2>Véhicules</h2>

<h3>Voitures</h3>
<?php 
$voitureElectrique = new Voiture('Peugeot', $moteurElectrique);
echo $voitureElectrique;
$voitureEssence = new Voiture('Renault', $moteurEssence);
echo $voitureEssence;
$voitureDiesel = new Voiture('Citroën', $moteurDiesel);
echo $voitureDiesel;
?>


<h3>Camion</h3>
<?php 
$camion = new Camion('Daf', $moteurEssence);
echo $camion->attacherRemorque();
echo $camion->detacherRemorque();
echo $camion;

?>

<h3>Moto</h3>
<?php 
$moto = new Moto('Honda', $moteurEssence);
echo $moto;
?>

<h2>Garagiste</h2>
<?php 
$garagiste = new Garagiste('Michel', 54);
echo $garagiste;
echo $garagiste->conduire($voitureElectrique);
?>

<h2>Garage</h2>
<?php 
$garage = new Garage();
echo $garage->addVehicule($voitureElectrique);
echo $garage->addVehicule($voitureEssence);
echo $garage->addVehicule($voitureDiesel);
echo $garage->addVehicule($camion);
echo $garage->addVehicule($moto);
echo $garage->afficherTousLesVehicules();

?>

</body>
</html>