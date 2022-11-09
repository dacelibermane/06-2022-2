<?php

require_once 'Dog.php';

$lady = new Dog("Lady", Dog::FEMALE);
$sam = new Dog("Sam", Dog::MALE);
$molly = new Dog("Molly", Dog::FEMALE);
$rockey = new Dog("Rockey", Dog::MALE, $molly, $sam);
$max = new Dog("Max", Dog::MALE, $lady, $rockey);
$sparky = new Dog("Sparky", Dog::MALE);
$buster = new Dog ("Buster", Dog::MALE, $lady, $sparky);
$coco = new Dog("Coco", Dog::MALE, $molly, $buster);

$dogs = [
    $max,
    $rockey,
    $sparky,
    $sam,
    $buster,
    $lady,
    $molly,
    $coco
];


foreach ($dogs as $dog) {
    echo "{$dog->getName()} ({$dog->getGender()})\n";

    if (!is_null($dog->getMother())) {

        echo " -> Mother: " . $dog->getMother()->getName() . ", ";
    }

    if (!is_null($dog->getFather())) {
        echo "Father: " . $dog->getFather()->getName() . "." . PHP_EOL;
    }

}




