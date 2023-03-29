<?php
include "Pessoa.php";
class Professor extends Pessoa{

    public $nome = "Professor";
    public $telefone = "8655-1023";
    public $endereco = "Rua caetano";

    public function pagamento(){
        echo "Professor recebe um salário de R$1.000,00";
    }
}
