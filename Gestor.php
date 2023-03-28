<?php
include "Pessoa.php";
class Gestor extends Pessoa{

    public $nome = "Gestor";
    public $telefone = "8875-5655";
    public $endereco = "Rua aldo furiate";

    public function pagamento(){
        echo "Gestor recebe um salário de R$2.000,00";
    }
}