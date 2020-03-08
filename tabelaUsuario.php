<?php
//Código para criar database
$servidor = "localhost";
$usuario = "root";
$senha = "minas";//minas
$database = "tcc";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	 $sql = "CREATE TABLE usuarios (
	        id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(40),
			email VARCHAR(50),
			senha VARCHAR(32)
			)";
	
      if (!mysqli_query($conexao,$sql)) 
		 echo "Falha na criação da Tabela!" . mysqli_connect_error();
	  else echo "Tabela criada usuario com sucesso!";
  	  
?>