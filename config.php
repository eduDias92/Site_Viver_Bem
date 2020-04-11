<?php
	require "environment.php";

	$config = array();
	$config['charset'] = 'utf8';
	if(ENVIRONMENT == 'development'){
		define('BASE_URL', 'http://localhost/site_viver_bem/');
		$config['host'] = 'localhost';
		$config['dbname'] = 'site_viver_bem';
		$config['dbuser'] = 'root';
		$config['dbpass'] = 'apache123';
	}else{
		define('BASE_URL', 'http://meusite.com.br/estrutura_mvc/');
		$config['host'] = 'localhost';
		$config['dbname'] = 'site_viver_bem';
		$config['dbuser'] = 'root';
		$config['dbpass'] = 'apache123';
	}

	global $db;

	try{
		$db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'].';', $config['dbuser'], $config['dbpass']);
	}catch(PDOExcepion $e){
		echo 'ERRO: '.$e->getMessage();
	}
?>