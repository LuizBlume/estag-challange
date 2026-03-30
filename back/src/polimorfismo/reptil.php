<?php 
require_once "animal.php";
class Reptil extends Animal {
    private $corEscama;
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom() {
        echo "<p>Som de réptil</p>";
    }
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    function getcorEscama() {
        return $this->corEscama;
    }
    function setcorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
?>