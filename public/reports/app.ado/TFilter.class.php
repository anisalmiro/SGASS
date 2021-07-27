<?php 
/* 
*Classe TFilter
*provê uma interface para definição de filtros de seleção
*P. 174
*/
class TFilter extends TExpression
{
 	private $variable; //Variavel
	private $operator; //Operador;
	private $value; //Valor
	/* 
	*metodo __construct()
	*Instancia um novo filtro
	*@param $variable = Variavel
	*@param $operator = operador (>,<,<>,etc)
	*@param $value = valor a ser comparado
	*/
	public function __construct($variable, $operator, $value)
	{
		//armazena as propriedades
		$this->variable = $variable;
		$this->operator = $operator;		
		//transforma o valor de acordo com certas regras antes de atribuir à propriedade this->$value
		$this->value = $this->transform($value);
	}
	
	/* 
	*método transform
	*recebe um valor e faaz as tranformações necessárias para ele ser interpretado pela base de dados
	*podendo ser um INTEGER/STRING/BOOLEAN/ARRAY/ETC
	*@param $value =  valor a ser tranformado
	*/
	private function transform($value)
	{
		//se for um array
		if(is_array($value))
		{
			//percorre os valores
			foreach($value as $x)
			{
				//se for um inteiro
				if(is_integer($x))
				{
					$foo[]= $x;
				}
				else if(is_string($x))
				{
					//se for uma string, adiciona aspas
					$foo[]= "'$x'";
				}
			}
			//converte o array em string separada por ","
			$result = '(' . implode(',', $foo) . ')';
		}
		//se for uma string
		else if(is_string($value))
		{
			//adiciona aspas
			$result = "'$value'";
		}
		//se for um valor nulo
		else if(is_null($value))
		{
			//armazena NULL
			$result = 'NULL';
		}
		//se for um booleano
		else if(is_bool($value))
		{
			//armazena TRUE ou FALSE
			$result = $value ? 'TRUE' : 'FALSE';
		}
		else
		{
			$result = $value;
		}
		//retorna o valor
		return $result;
}
	/* 
	*método dump()
	*retorna o filtro em forma de expressão 
	*/
	public function dump()
	{
		//concatena a expressao
		return "{$this->variable} {$this->operator} {$this->value}";
	}	
}
?>