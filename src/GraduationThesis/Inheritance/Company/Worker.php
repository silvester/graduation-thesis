<?php
// Inheritance/Company/Worker.php
namespace GraduationThesis\Inheritance\Company;

class Worker 
{
	private $name;
	private $surname;
	private $title;

	public function __construct($name, $surname, $title)
	{
		$this->setName($name)->setSurname($surname)->setTitle($title);
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = trim($name);
		return $this;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function setSurname($surname)
	{
		$this->surname = trim($surname);
		return $this;
	}

	public function getTitle()
	{
		return $this->title;
	}
	
	public function setTitle($title)
	{
		$this->title = trim($title);
		return $this;
	}

}
