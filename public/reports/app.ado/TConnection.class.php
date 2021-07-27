<?php 
/* 
*Classe TConnection
*Gerencia conexões com Bases de Dados
 */
final class TConnection extends PDO
{
	//Conexão com o Mysql	
	///*
 	const DB_HOST='localhost';
    const DB_PORT='3306';
    const DB_NAME='sgass';
    const DB_USER='anisiobule';
    const DB_PASS='An1s1@1990'; 
	
	const SM_MAIL='';
	const SM_HOST='';
	const SM_PASSWORD='';
	const SM_NAME='';
	const SM_PORT='25';
	//*/
 	/* 
	*metodo __construct()
	*Vamos criar uma instância de TConnection, por isso marcamos-o como public
	 */
	 public function __construct($options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"))
	{	 
		parent::__construct('mysql:host='.TConnection::DB_HOST.';port='.TConnection::DB_PORT.';dbname='.TConnection::DB_NAME,TConnection::DB_USER, TConnection::DB_PASS,$options);								
	 }//End __construct()
}
?>
<?php
//CONEXAO PARA BUSCAS AJAX.
	function connect() {
    return new PDO('mysql:host='.TConnection::DB_HOST.';dbname='.TConnection::DB_NAME, TConnection::DB_USER, TConnection::DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
?>