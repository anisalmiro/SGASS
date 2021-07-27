<?php 
/* 
*Classe TSqlDelete
*provê meios para a manipulação de uma instrução de DELETE na base de dados
*P. 194
*/
final class TSqlDelete extends TSqlInstruction
{
	/*  
	*Método getInstruction()
	*retorna instrução de DELETE em forma de string.
	*/			
	public function getInstruction()
	{
		$this->sql = "DELETE FROM {$this->entity}";		
		//retorna a cláusula WHRE do objecto $this->criteria
		if($this->criteria)
		{
			$expression = $this->criteria->dump();
			if($expression)
			{
				$this->sql .= ' WHERE ' . $expression;
			}
		}
		return $this->sql;
	}
}
?>