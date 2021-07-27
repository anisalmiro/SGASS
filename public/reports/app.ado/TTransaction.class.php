<?php 
/* 
*NOTA: MODIFICADO PARA FUNCIONAR APENAS NO REGISTO DE LOGS
*Classe TTransaction
*Provê todos os métodos para a manipulação de Transações
*P. 209
 */
 final class TTransaction extends PDO
 { 	
 	private static $conn; //Conexão activa
	private static $logger; //objecto de log
	
	/* 
	*metodo __construct()
	*Declarado como private para evitar que se criem instâncias de TTransaction
	*/	
	 public function __construct(){}
	 
	 /* 
	*metodo open()
	*Abre uma Transacção e uma conexão com a Base de Dados
	*@param $database = nome da base de dados
	*/
	 public static function open($database)
	 {
	 	//Abre uma conexão e armazena na propriedade estática $conn
		if(empty(self::$conn))
		{
			$conn = TConnection::open($database);
			//Desliga o Log do SQl
			self::$logger = NULL;
		}
	 }
	 	
	 /*
	 *método setlogger()
	 *Define qual estratégia de algoritmo de LOG a ser usada
	 */
	 public static function setLogger(TLogger $logger)
	 {
	 	self::$logger = $logger;
	 }
	 
	 /*
	 *método log()
	 *Armazena uma mensagem no arquivo de LOG baseada na estratégia ($logger) actual	 
	 */
	 public static function log($message)
	 {
	 	//verifica se existe um LOG
		if(self::$logger)
		{
			self::$logger->write($message);
		}
	 }
 }
?>