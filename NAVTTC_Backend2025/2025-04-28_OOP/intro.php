<?php

require 'class/Animal.php';

$cat = new Animal();

$cat->name = "Meaaaun";
$cat->color="White";

echo $cat->name;

$cat->myPet();

?>