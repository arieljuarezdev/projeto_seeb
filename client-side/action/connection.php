<?php
	$server = "127.0.0.1";
	$usuario = "root";
	$senha = "@batata1337@";
	$db = "projeto_seeb";

	$conn = new PDO("mysql:host=$server;dbname=$db",$usuario,$senha);

?>