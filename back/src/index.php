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
            require_once 'controleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
        ?>
</body>
</pre>
</html>