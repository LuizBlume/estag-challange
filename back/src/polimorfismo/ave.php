<?php 
require_once "animal.php";
class Ave extends Animal {
    private $corPena;
    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom() {
        echo "<p>Sons de ave</p>";
    }
    public function locomover() {
        echo "<p>Voando</p>";
    }
    public function fazerNinho() {
        echo "<p>Construindo um ninho!</p>";
    }
    function getcorPena() {
        return $this->corPena;
    }
    function setcorPena($corPena) {
        $this->corPena = $corPena;
    }
}
?>