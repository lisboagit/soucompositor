<?php

class Admin_Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDefaultAutoload()
	{
		$moduleLoader = new Zend_Application_Module_Autoloader(
				array(
						'namespace'=>'Admin',
						'basePath'=> dirname(__FILE__)
				)
		);
	
		return $moduleLoader;
	}
}