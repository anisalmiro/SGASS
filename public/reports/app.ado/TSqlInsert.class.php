<?php 
/* 
*Classe TSqlInsert
*provê meios para a manipulação de uma instrução de INSERT na base de dados
*P. 185
*/
final class TSqlInsert extends TSqlInstruction
{
	/* 
	*metodo setRowData()
	*Atribui valores à determinadas colunas na base de dados que serão inseridas
	*@param $column = coluna da tabela
	*@param $value = valor a ser inserido/armazenado
	*/
	public function setRowData($column, $value)
	{
		//monta um array indexado pelo nome da coluna
		if(is_string($value	))
		{
			//adiciona \ em aspas
			$value = addslashes($value);
			//caso seja uma string
			$this->columnValues[$column] = "'$value'";
		}
		//se for um booleano
		else if(is_bool($value))
		{
			//armazena TRUE ou FALSE
			$this->columnValues[$column] = $value ? 'TRUE':'FALSE';
		}
		// se for outro tipo de valor
		else if(isset($value))
		{
			$this->columnValues[$column] = $value;
		}
		//se for NULL
		else
		{
			$this->columnValues[$column] = 'NULL';
		}
		
	}
	
	/*  
	*Método setCriteria()
	*Não existe no contexto desta classe, logo, irá lancar um erro se for executado
	*/
	public function setCriteria($criteria)
	{
		//lança um erro
		throw new exception("Cannot call setCriteria from " . __CLASS__);
		
	}
	
	/*  
	*Método getInstruction()
	*retorna instrução de INSERT em forma de string.
	*/			
	public function getInstruction()
	{
		$this->sql = "INSERT INTO {$this->entity} (";
		//monta uma string contendo os nomes das colunas
		$columns = implode(', ', array_keys($this->columnValues));
		//monta uma string contendo os valores
		$values = implode(', ', array_values($this->columnValues));
		$this->sql .= $columns . ')';
		$this->sql .= " VALUES ($values)";
		
		//retorna a sring completa maontada
		return $this->sql;
	}
}
?>