<?php
require_once 'controlador.php';
class ControleRemoto implements controlador {
    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->volume = 50,
        $this->ligado = false;
        $this->tocando = f
    }
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    public function abrirMenu() {
        echo "<br>Está ligado?: " . ($this->getLigado())?"SIM":"NÃO";
        echo "<br>Está tocando?: " . ($this->getTocando())?"SIM":"NÃO";
        echo "<br>Volume: " . $this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu...";
    }
    public function ligar() {
        $this->setLigado(TRUE);
    }
    public function desligar() {
        $this->setLigado(FALSE);
    }
    public function desligarMudo() {
        
    }
    public function ligarMudo() {

    }
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function pause() {

    }
    public function play() {

    }
}
?>