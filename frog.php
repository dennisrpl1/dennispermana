<?php
// Frog.php
require_once "animal.php";

class Frog extends Animal {
    // Methode khusus untuk Frog
    public function jump() {
        echo "jump : hop hop<br>";
    }
}