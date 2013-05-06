<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initConnection()
	{
		$config = new Zend_Config_Ini('../application/configs/application.ini', APPLICATION_ENV);
		try
		{
			$db = Zend_Db::factory($config->db);
	
			// Registra o banco de dados
			$registry = Zend_Registry::getInstance();
			$registry->set('db', $db);
	
			Zend_Db_Table::setDefaultAdapter($db);
		}
		catch(Zend_Db_Exception $e)
		{
			echo $e->getMessage();
			echo "Não foi possível realizar a conexão com o banco de dados.";
			exit;
		}
	}
}

