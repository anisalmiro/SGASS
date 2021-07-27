<?php 
/* 
*Classe TLogger
*Provê uma interface abstracta para a definição de algoritmos de LOG
*P. 214
 */	
abstract class TLogger
{
	protected $filename; //local do arquivo de LOG
		
	/* 
	*metodo __construct()
	*Instancia um logger
	*@param $filename = local do arquivo de LOG
	*/	
	public function __construct($filename)
	{
	 	$this->filename = $filename;
		//Limpa (Reset) o conteúdo do arquivo
		file_put_contents($filename,'');
	}	 
	 
	//Define o método action como obrigatório
	abstract function write($message);
}
?>