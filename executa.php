<?php
//carregando o autoload
require_once('autoload.php');
// usando a classa Pessoa 
use Projeto\Autoload\Pessoa;

// Instanciando a classe Pessoa para verificar se o Autoload está funcionando corretamente
$pessoa = new Pessoa("Cláudio Oliveira", "27");


echo $pessoa->recuperaNome();

?>