<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <pre>
        <?php
            /* require_once 'contaBanco.php';
            $p1 = new Bank();
            $p2 = new Bank();
            $p3 = new Bank();
            $p1->abrirConta("CC");
            $p1->setNumConta(11111);
            $p1->setDono("Jubileu");
            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");
            $p3->abrirConta("CC");
            $p3->setNumConta(444444);
            $p3->setDono("Ganso");
            $p1->depositar(300);
            $p2->depositar(500);
            $p3->depositar(500);
            $p1->pagarMensal();
            $p2->pagarMensal();
            $p3->pagarMensal();
            $p1->sacar(338);
            $p2->sacar(630);
            $p3->sacar(345);
            $p1->fecharConta();
            $p2->fecharConta();
            $p3->fecharConta();
            print_r($p1);
            print_r($p2);
            print_r($p3);
            */
            /*
            require_once 'controleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
            */
            // require_once 'lutador.php';
            // require_once 'luta.php';
            // $l = array();
            // $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            // $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 3, 2);
            // $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            // $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            // $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            // $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            // $UEC01 = new Luta();
            // $UEC01->marcarLuta($l[0], $l[1]);
            // $UEC01->lutar();
            // foreach ($l as $lutador) {
            //     $lutador->status();
            // }

            require_once "pessoa.php";
            require_once "aluno.php";
            require_once "professor.php";
            require_once "funcionario.php";

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Claúdio");
            $p4->setNome("Fabiana");

            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");

            $p3->receberAum(550.20);
            $p4->mudarTrabalho();
            $p2->cancelarMatr();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
</body>
</pre>
</html>