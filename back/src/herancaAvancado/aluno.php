<?php 
require_once 'pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    public function pagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }
    function getMatr() {
        return $this->matricula;
    }
    function getCurso() {
        return $this->curso;
    }
    function setMatr($matricula) {
        $this->matricula = $matricula;
    }
    function setCurso($curso) {
        $this->curso = $curso;
    }
}
?>