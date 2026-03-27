<?php 
require_once "luta.php";
class Lutador {
    private $nome, $nacionalidade, $categoria;
    private $idade, $vitorias, $empates, $derrotas;
    private $peso, $altura;
    public function __construct($no, $na, $id, $al, $pe, $vi, $em, $de) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->empates = $em;
        $this->derrotas = $de;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setNome() {
        return $this->nome;
    }
    public function setNacionalidade() {
        return $this->nacionalidade;
    }
    public function setIdade() {
        return $this->idade;
    }
    public function setAltura() {
        return $this->altura;
    }
    public function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }
    private function setCategoria() {
        if ($this->peso < 52.5) {
            $this->categoria = "inválido";
        }
        elseif ($this->peso <= 70) {
            $this->categoria  = "Leve";
        }
        elseif ($this->peso <= 83.9) {
            $this->categoria  = "Médio";
        }
        elseif ($this->peso <= 120.2) {
            $this->categoria  = "Pesado";
        }
        else {
            $this->categoria = "Inválido";
        }
    }
    public function setVitorias() {
        return $this->vitorias;
    }
    public function setEmpates() {
        return $this->empates;
    }
    public function setDerrotas() {
        return $this->derrotas;
    }
    public function apresentar() {
        echo "<p>-------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo "Veio diretamente de " . $this->getNacionalidade();
        echo "Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }
    public function status() {
        echo "<p>-------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . ".";
        echo "E já ganhou " . $this->getVitorias() . " vezes";
        echo ", já perdeu " . $this->getDerrotas() . " vezes ";
        echo "<br>e empatou " . $this->getEmpates() . " vezes </p>";
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
}
?>