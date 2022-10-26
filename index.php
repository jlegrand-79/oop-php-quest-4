<?php
require_once 'Car.php';
$car = new Car('green', 4, 'fuel');
$car->setParkBrake(true);
var_dump($car);
echo nl2br("Que fait JCVD quand il rentre dans une voiture ? Il \"full contact\" :)" . PHP_EOL);
try {
    // Code to try
    echo nl2br($car->start() . PHP_EOL);
} catch (LogicException $e) {
    // code to manage exceptions
    echo nl2br('Exception logique : ' . $e->getMessage() . PHP_EOL);
} catch (Exception $e) {
    // code to manage all other exceptions
    echo nl2br('Exception d\'exécution : ' . $e->getMessage() . PHP_EOL);
    $car->setParkBrake(false);
    echo nl2br('Frein à mains retiré => ' . $car->start() . PHP_EOL);
} finally {
    // this code is always executed
    echo nl2br("Ma voiture roule comme un donut !" . PHP_EOL);
}
var_dump($car);
