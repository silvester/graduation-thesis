<?php
namespace Company;

class Worker // the class
{
	public $name;
	public $surname;

	public function __construct($name, $surname)
	{
		$this->name = $name;
		$this->surname = $surname;
		echo 'Object constructed: ', $this->name.' '.$this->surname;
	}

	public function __destruct()
	{
		echo 'Object destructed: ', $this->name.' '.$this->surname;
	}
	
}
