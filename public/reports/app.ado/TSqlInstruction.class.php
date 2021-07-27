<?php 
/* 
*Classe TSqlInstruction
*provê os métodos em comum entre todas as instruções SQL(SELECT, INSERT, UPDATE, DELETE)
*P. 185
*/
abstract class TSqlInstruction
{
 	protected $sql; //Armazena a instrução SQL
	protected $criteria; //Armazena o objecto criterio
	
	/*  
	*Método setEntity()
	*define o nome da entidade (Tabela) manipulada pela instrução SQL
	*@param $entity = tabela
	*/		
	final public function setEntity($entity)
	{
		$this->entity = $entity;
	}
	
	/*  
	*Método getEntity()
	*retorna o nome da entidade (Tabela)
	*@param $property = propriedade
	*/			
	final public function getEntity()
	{
		return $this->entity;
	}
	
	/*  
	*Método setCriteria()
	*define um criterio e de seleção de dados através da composição de um objecto
	* do tipo TCriteria, que oferece uma interface para a definição de critérios
	*@param $criteria = objecto do tipo TCriteria
	*/
	public function setCriteria(TCriteria $criteria)
	{
		$this->criteria = $criteria;
	}
	
	/*  
	*Método getInstruction()
	*Declarando-o como <abstract> obrigamos sua declaração nas classes filhas
	* uma vez que o seu comportamento será destinto em cada uma delas, configurando o polimorfismo
	*/
	abstract function getInstruction();
}
?>