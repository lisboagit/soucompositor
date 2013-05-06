<?php
class Admin_Model_Row_ComposicoesCategoriasRow extends Zend_Db_Table_Row
{
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}
	
	public function getDescricao()
	{
		return $this->descricao;
	}	
}