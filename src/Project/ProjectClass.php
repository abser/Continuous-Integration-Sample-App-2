<?php
//Project base class
require_once 'ProjectModel.php';
//namespace Project\Controller\ProjectClass;
//use Project\Model\ProjectModel as pm;

class ProjectClass{

	function __construct(){
		$this->pm = new ProjectModel;
	}

	public function createProject(){
		try{
			$status = $this->pm->saveProject();
		}
		catch(exception $e){
			die("something wrong!>".$e);
		}
		return $status;
	}
}