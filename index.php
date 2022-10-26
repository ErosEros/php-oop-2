<?php

require_once __DIR__ . '/profile.php';
require_once __DIR__ . '/general_product.php';
require_once __DIR__ . '/toys.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/dog_bed.php';

$avatar = new User ('Eros','Vittori',true,'6547534',2024);

echo "<pre>";
var_dump($avatar);
echo "</pre>";

$dog_bed = new Dog_bed(80,'small',30,00002345,'dog');
echo "<pre>";
var_dump($dog_bed);
echo "</pre>";

$avatar-> AddToCart($dog_bed);

echo "<pre>";
var_dump($avatar);
echo "</pre>";

$avatar->chechRegister();

?>