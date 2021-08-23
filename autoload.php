<?php


spl_autoload_register(
  function($class){
	//altera o namespace raiz para Projeto\Autoload
	// Utilizando o \\ para que o php entenda que quero 'escapar' a barra.
	$caminho = str_replace('Projeto\\Autoload', 'src', $class);
	
	// ajuste da barra de separação de diretório para funcionar em qualquer S.O.
	$caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
	
    // concatenando a extensão php nos arquivos - Projeto\Autoload\classe.php
	$caminho .= '.php';
	// Validação se o arquivo existe - c.f. PSR-4
	if(file_exists($caminho)){
		require_once $caminho;
	}
  }
); 

?>