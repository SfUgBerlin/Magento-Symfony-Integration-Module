<?php



class SfUgBerlin_Symfony_Model_Main_Observer
{
	public function __construct(){
		//die('construct');
	}

	public function initAutoloader(){
		require_once Mage::getBaseDir() . '/symfony/vendor/.composer/autoload.php';
	}

	public function dispatch(){
		//die('dispatch');
	}
}
