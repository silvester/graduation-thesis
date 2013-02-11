<?php

use GraduationThesis\Classes\Company\Worker;

require_once 'Company/Worker.php';

$worker = new Worker('Silvester', 'Maraž');
unset($worker);
