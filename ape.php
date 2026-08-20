<?php
// Ape.php
require_once "animal.php";

class Ape extends Animal {
    // constructor di-override untuk mengubah nilai default legs menjadi 2
    public function __construct($name){
    parent::__construct($name);
    $this-legs = 2; // kera berkaki 2
}

//method khusus untuk Ape 
public function yell() {
   echo "yell : Auooo<br>";
   }
}
