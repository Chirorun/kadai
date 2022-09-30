<?php
require 'AirConditioner.php';

// エアコンの電源ON
$airconditioner = new AirConditioner("冷房" , "20" , "4");


$airconditioner->showStatus();

$airconditioner->Changeheat();

$airconditioner->showStatus();

$airconditioner->Changedry();

$airconditioner->showStatus();

$airconditioner->Changecold();

$airconditioner->showStatus();


$airconditioner->increas();
$airconditioner->showStatus();

$airconditioner->dicreas();
$airconditioner->showStatus();

$airconditioner->dicreas();
$airconditioner->showStatus();


$airconditioner->up();
$airconditioner->showStatus();
?>