<?php 
/* 
*Classe TLoggerHTML
*Implementa um algoritmo de LOG
*P. 216
 */	
class TLoggerHTML extends TLogger
{		
	/* 
	*metodo write()
	*Escreve uma mensagem no arquivo de LOG
	*@param $message = mensagem a ser escrita no arquivo de LOG
	*/	
	public function write($message)
	{
		$time = date("Y-m-d H:i:s");
		//Monta a string da mensagem
		$text = "<p>\n";
		$text.= "	<b>$time</b> : \n";
		$text.= "	<i>$message</i> <br>\n";
		$text.= "</p>\n";
		
		//Adiciona ao final do arquivo
		$handler = fopen($this->filename, 'a');
		fwrite ($handler, $text);
		fclose ($handler);
	}
}
?>