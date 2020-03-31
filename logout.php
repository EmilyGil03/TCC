<?php
	session_start();

	if (isset($_SESSION["login"])) 
	{
		//APAGA TODAS AS SESSÕES
		session_destroy();
	}
	//redirencionamento de pagina
	header("Location:index.php");
?>