<?php
require_once 'CPU/People.php';
require_once 'FRI/People.php';

use GraduationThesis\Namespaces\CPU\People as CpuPeople;
use GraduationThesis\Namespaces\FRI\People as FriPeople;

$cpuPeople = new CpuPeople;
$cpuPeople->sayHello();

$friPeople = new FriPeople;
$friPeople->sayHello();
