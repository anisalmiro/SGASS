<?php 
/* 
*Classe TCriteria
*provê uma interface utilizada para definição de critérios de seleção
*P. 180
*/
class TCriteria extends TExpression
{
 	private $expressions; //Armazena a lista de expressoes
	private $operators; //Armazena a lista Operadores;
	private $properties; //Propriedades do Critério
	/* 
	*metodo add()
	*Adiciona uma expressão ao critério
	*@param $expression = expressão (objecto TExpression)
	*@param $operator = operador lógico  de comparação
	*/
	public function add(TExpression $expression, $operator = self::AND_OPERATOR)
	{
		//Na primeira vez nao precisa de operador logico para concatenar
		if(empty($this->expressions))
		{
			unset($operator);
			$operator = '';
		}else{
			$this->operators[] =  $operator;
		}
		
		//agrega o resultado da expressão à lista de expressoes
		$this->expressions[] =  $expression;
	}
	
	/* 
	*método dump()
	*retorna a expressão final
	*/	
	public function dump()
	{
		$result = '';
		//concatena a lista de expressões
		if(is_array($this->expressions))
		{
			foreach($this->expressions as $i=> $expression)
			{
				$operator = $this->operators[$i];
				//Concatena o operador com a  respectiva expressão
				$result .= $operator. $expression->dump() . ' ';
			}
			$result = trim($result);
			return "({$result})";
		}
	}
	
	/*  
	*Método setProperty()
	*define o valor de uma propriedade
	*@param $property = propriedade
	*@param $value = valor 
	*/		
	public function setProperty($property, $value)
	{
		$this->properties[$property] = $value;
	}
	
	/*  
	*Método getProperty()
	*retorna o valor de uma propriedade
	*@param $property = propriedade
	*/			
	public function getProperty($property)
	{	
		if(empty($this->property))
		{
			unset($property);
			return;
		}else{
			return $this->properties[$property];
		}
	}
}
?>