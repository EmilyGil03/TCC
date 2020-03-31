<?php
$servidor = "localhost";
$usuario = "root";
$senha = ""; //minas

$conexao = mysqli_connect($servidor, $usuario, $senha);
//mysqli_set_charset($conexao, "utf8");

if(!$conexao)
	echo "Falha na conexão do Database..." . mysqli_connect_error();
else
	echo "Conexão bem-sucedida...";

	$sql = "CREATE DATABASE tcc";

	if(!mysqli_query($conexao,$sql))
	echo "Falha na criação do Database..." . mysqli_connect_error();
	else
	echo "Database criado com sucesso...";
		$database = "tcc";
		$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	 	$sql = "CREATE TABLE usuarios (
	        id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(40),
			email VARCHAR(50),
			senha VARCHAR(32)
			)";
	
      			if (!mysqli_query($conexao,$sql)) 
		 			echo "Falha na criação da Tabela de usuarios..." . mysqli_connect_error();
	  			else echo "Tabela usuarios criada usuario com sucesso...";
  	  
?>