<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With'); 
header('Content-Type: application/json,text/html; charset=utf-8');  
 

	$host = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'site';

	$con = new mysqli($host, $usuario, $senha, $banco);


	if(mysqli_connect_errno()){
		exit("Erro ao conectar-se ao banco de dados: ".mysqli_connect_error());
	}
?>