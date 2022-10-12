<?php
	$server = "127.0.0.1";
	$usuario = "root";
	$senha = "@batata1337@";
	$db = "seeb_usuario";
try{
	
	$conn = new PDO("mysql:host=$server;dbname=$db",$usuario,$senha);

	echo "deu bom!";
	
}catch(PDOException $erro){
	
	echo "deu ruim!". $erro->getMessage();
}
?>