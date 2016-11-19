<?php
require 'Input.php';

$_Request = [
	'somenumber' => '42',
	'notanumber' => 'fourty two',
	'notastring' => ['1', '2', '3'],
];

var_dump(Input::getString('notanumber'));

var_dump(Input::getNumber('notanumber'));