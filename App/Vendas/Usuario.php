<?php 

namespace App\Vendas;

class Usuario
{
    public $nome, $idade;

    public function cadastrar($nome, $idade)
    {
        $this->nome  = $nome;
        $this->idade = $idade;
    }

    public function imprimir()
    {
        $r = "Nome: {$this->nome} <br>";
        $r.= "Nome: {$this->idade} <br>";

        return $r;
    }
}