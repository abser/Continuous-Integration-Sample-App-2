<?php
//namespace Project\Tests\ProjectTest;
//use Project\Controller\ProjectClass as Project;
require_once('ProjectClass.php');

class ProjectTest extends PHPUnit_Framework_TestCase {

function __construct(){
	$this->project = new ProjectClass;
}
	public function testInsertProject() {
		$_POST['projectName'] = "Some project name";
		$_POST['start'] = "12-12-2015";
		$_POST['end'] = "30-12-2015";
		$_POST['budget'] = 123123.00;

		$rv = $this->project->createProject();
		$this->assertEquals(true, $rv);
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	// function anotherTest()
	// {
	// }
}