


<?php
//Esse arquivo inicia a sessão e estabelece conexão com o banco de dados

session_start(); //Inicia a sessão

// nome do banco = classificados
// senha = root

try {
	$pdo = new PDO("mysql:dbname=classificados;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}



?>