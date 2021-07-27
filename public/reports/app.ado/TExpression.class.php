<?php 
/* 
*Classe TExpression
*Classe abstracta para gerenciar expressoes
*P. 174
 */
abstract class TExpression
{
 	//Operadores lógicos
	const AND_OPERATOR = 'AND ';
	const OR_OPERATOR = 'OR ';	
	//Marca o método dump como obrigatório
	abstract public function dump();
}
?>