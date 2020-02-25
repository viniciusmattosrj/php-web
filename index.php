<?php 

    use App\Vendas\Usuario;
    use App\Vendas\Produto;
    use App\Vendas\Compra;
    use App\Estoque\Estoque;

    require_once 'vendor/autoload.php';

    $u = new Usuario();
    $u->cadastrar('Vinicius', 30);

    $p1 = new Produto();
    $p2 = new Produto();

    $p1->cadastrar(1, 'produtoA');
    $p2->cadastrar(2, 'produtoB');

    $c = new Compra();
    $c->cadastrar(
    array(
            'p1' => $p1,
            'p2' => $p2
        ), $u
    );

echo $c->imprimir();

$e = new Estoque();
echo $e->getTotal();