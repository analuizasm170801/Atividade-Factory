<?php
include "AlunoFactory.php";
$factory = new AlunoFactory();
$pessoa = $factory->criarPessoa();

echo $pessoa->pagamento();
echo $pessoa->nome;
echo $pessoa->telefone;
echo $pessoa->endereco;