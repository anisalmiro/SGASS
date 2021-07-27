<?php 
/* 
*Classe TSqlSelect
*provê meios para a manipulação de uma instrução de SELECT na base de dados
*P. 195
*/
final class TSqlSelect extends TSqlInstruction
{
	private $columns; //array de colunas a serem retornadas
	
	/* 
	*Método addColumn
	*adiciona a coluna a ser retornada pelo SELECT
	*@param $column = coluna da tabela
	*/
	public function addColumn($column)
	{
		//adiciona a coluna no array
		$this->columns[] = $column;
	}
	
	/*  
	*Método getInstruction()
	*retorna instrução de SELECT em forma de string.
	*/	
	public function getInstruction()
	{
		//monta a instrução de SELECT
		$this->sql = 'SELECT ';
		//monta uma string contendo os nomes das colunas
		$this->sql .= implode(', ', $this->columns);
		//adiciona a clausula FROM o nome da tabela
		$this->sql .= ' FROM ' . $this->entity;
		
		//obtém a clausula WHERE do objecto criteria
		if($this->criteria)
		{
			$expression = $this->criteria->dump();
			if($expression)
			{
				$this->sql .= ' WHERE ' . $expression;
			}
			
			//obtém as propriedades do critério
			$group = $this->criteria->getProperty('group');
			$order = $this->criteria->getProperty('order');
			$limit = $this->criteria->getProperty('limit');
			$offset = $this->criteria->getProperty('offset');
			//obtém a ordenação do SELECT
			if($group)
			{
				if(!empty($group))
				{
				$this->sql .= ' GROUP BY ' . $group;
				}
			}
			if($order)
			{
				if(!empty($order))
				{
					$this->sql .= ' ORDER BY ' . $order;
				}
			}
			if($limit)
			{
				if(!empty($limit))
				{
					$this->sql .= ' LIMIT ' . $limit;
				}
			}
			if($offset)
			{
				if(!empty($offset))
				{
					$this->sql .= ' OFFSET ' . $offset;
				}
			}
		}
		
		//retorna a sring completa maontada
		return $this->sql;
	}
}
?>