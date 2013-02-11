<?php
// Inheritance/index.php
use GraduationThesis\Inheritance\Company\Employee;

require_once('Company/Employee/Manager.php');
require_once('Company/Employee/Teacher.php');

$manager = new Employee\Manager('Janša', 'Novak', 'Mr.');
$manager->manage();

$teacher = new Employee\Teacher('Zoran', 'Novak', 'Dr.');
$teacher->teach();
