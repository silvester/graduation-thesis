<?php
// Inheritance/Company/Employee/Manager.php
namespace GraduationThesis\Inheritance\Company\Employee;
require_once('Company/Worker.php');

class Manager extends \GraduationThesis\Inheritance\Company\Worker
{
	public function manage()
	{
		echo $this->getTitle() 
			. ' ' . $this->getName() 
			. ' ' . $this->getSurname()
			. " said: consider your self well managed.\n";
	}
}
