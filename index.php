<?php
// index.php

// import semua file class yang di butuuhkan
require_once "animal.php";
require_once "Frog.php";
require_once "Ape.php";

// --- RELASE 0---
echo "name : " . $sheep->name . "<br>"; // "shaun"
echo "legs : " . $sheep->legs . "<br>"; //4
echo "cold blooded : " . $sheep->$cold_blooded . "<br>br<>"; // "no"

// --- RELEASE 1 ---

// Instance untuk Ape (Kera sakti)
$sungokong = new Animal("Shaun");

echo "Name" : " . $sungokong->name . "<br>";
echo "legs" : " . $sungokong->legs . "<br>"; // Otomatis keluar 2
echo "cold blooded : " . $sungokong->$cold_blooded . "<br>";
$sungokong->yell(); // "Auooo"
echo "<br>";

// Instance untuk frog (buduk)
$sungokong = new frog("buduk");

echo "name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>"; // otomatis keluar 4
echo "cold blooded : " . $kodok->$cold_blooded . "<>br";
$kodok->jump(); // "hop hop"