<?php

class Admin_Model_DbTable_ComposicoesCategorias extends Zend_Db_Table_Abstract
{
    protected $_name = 'composicoes_categorias';
    protected $_primary = 'id';
    protected $_rowClass = 'Admin_Model_Row_ComposicoesCategoriasRow';
    
    const DESCRICAO = 'descricao';
}