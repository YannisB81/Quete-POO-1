<?php

require_once 'Bicycle.php';
$bike1 = new Bicycle('white');

$bike1->setCurrentSpeed(25);

echo $bike1->forward();
echo '<br> Vitesse du vélo : ' . $bike1->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike1->brake();
echo '<br> Vitesse du vélo : ' . $bike1->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike1->brake().'<br>';


require_once 'Car.php';
$auto1 = new Car('blanche', 4, 'du gasoil');
//$bike->setCurrentSpeed(25);
//var_dump($bike);
echo '<br>'.$auto1;
echo '<br>'.$auto1->start();
echo '<br>'.$auto1->forward();
echo '<br> Vitesse de la voiture : ' . $auto1->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>'.$auto1->brake();
echo '<br> Vitesse de la voiture : ' . $auto1->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto1->brake().'<br>';


$auto2 = new Car('jaune', 7, 'du charbon');
echo '<br>'.$auto2;
echo '<br>'.$auto2->start();
echo '<br>'.$auto2->forward();
echo '<br> Vitesse de la voiture : ' . $auto2->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>'.$auto2->brake();
echo '<br> Vitesse de la voiture : ' . $auto2->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto2->brake().'<br>';