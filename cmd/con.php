<?php

	$host = 'localhost';
	$user = 'root';
	$pass = 'anma1981';

	try
	{

		$con = new PDO("mysql:host=$host;dbname=hiasd", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Banco conectado com sucesso!";
		
	}
	catch(PDOException $e)
	{
		
		echo "Erro ao conectar: ".$e->getMessage();

	}
?>
