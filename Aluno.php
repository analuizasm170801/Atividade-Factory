<?php
include "Pessoa.php";
class Aluno extends Pessoa{

    public $nome = "Aluno";
    public $telefone = "9921-4456";
    public $endereco = "Rua da paz";

    public function pagamento(){
        echo "Aluno não recebe pagamento";
    }
}