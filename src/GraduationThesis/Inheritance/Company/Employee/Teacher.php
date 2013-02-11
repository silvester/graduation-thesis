<?php
// Inheritance/Company/Employee/Teacher.php
namespace GraduationThesis\Inheritance\Company\Employee;
require_once('Company/Worker.php');

class Teacher extends \GraduationThesis\Inheritance\Company\Worker
{
	public function teach()
	{
		echo $this->getTitle() 
			. ' ' . $this->getName()
			. ' ' . $this->getSurname() 
			. " said: Feel the force!\n";
	}
}
