<?php

class Admin_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $db = new Admin_Model_DbTable_ComposicoesCategorias();
        
        //$newRow = $db->createRow();
        //$newRow->setDescricao('Samba');
        //$newRow->save();
        
        //$row = $db->fetchRow();
        //$row->getDescricao();
        //$row->setDescricao('Rock editado');
        //$row->save();
    }
}