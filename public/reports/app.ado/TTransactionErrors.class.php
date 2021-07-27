<?php 
/* 
*NOTA: MODIFICADO PARA FUNCIONAR APENAS NO REGISTO DE LOGS
*Classe TTransaction
*Provê todos os métodos para a manipulação de Transações
*P. 209
 */
 final class TTransaction //extends PDO
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
			self::$conn = TConnection::open($database);

			self::$conn = new TConnection();		
			 //echo "$database";
			//inicia a transação
			self::$conn->beginTransaction();
		}
	 }
	 
	 /*
	 *método get()
	 *retorna a conexão activa da transação
	 */
	 public static function get()
	 {
	 	//retorna a conexão activa
		return self::$conn;
	 }
	 
	 public function rollback()
	 {
	 	if(self::$conn)
		{
			//desfaz as operações realizadas durante a transação
			self::$conn->rollback();
			self::$conn = NULL;
		}
	 }
	 
	 /*
	 *método close()
	 *Aplica todas as operações ralizadas e fecha a transação
	 */
	 public static function close()
	 {
	 	if(self::$conn)
		{
			//aplica as operações realizadas durante a transação
			self::$conn->commit();
			self::$conn = NULL;
		}
	 }
 }
?>