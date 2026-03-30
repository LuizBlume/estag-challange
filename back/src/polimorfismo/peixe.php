<?php 
require_once "animal.php";
class Peixe extends Animal {
    private $corEscama;
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz asom</p>";
    }
    public function locoomover() {
        echo "<p>Nadando</p>";
    }
    public function soltarBolha() {
        echo "<p>Soltou uma bolha!</p>";
    }
    function getcorEscama() {
        return $this->corEscama;
    }
    function setcorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
?>