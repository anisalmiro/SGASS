<?php 
/* 
*Classe TSqlUpdate
*provê meios para a manipulação de uma instrução de UPDATE na base de dados
*P. 190
*/
final class TSqlUpdate extends TSqlInstruction
{
	/* 
	*metodo setRowData()
	*Atribui valores à determinadas colunas na base de dados que serão modificadas
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
	*Método getInstruction()
	*retorna instrução de UPDATE em forma de string.
	*/			
	public function getInstruction()
	{
		$this->sql = "UPDATE {$this->entity}";
		//monta os pares coluna-valor
		if($this->columnValues)
		{
			foreach($this->columnValues as $column=>$value)
			{
				$set[] = "{$column} = {$value}";
			}
		}
		$this->sql .= ' SET ' . implode(', ', $set);		
		//retorna a cláusula WHRE do objecto $this->criteria
		if($this->criteria)
		{
			$this->sql .= ' WHERE ' . $this->criteria->dump();
		}
		return $this->sql;
	}
}
?>