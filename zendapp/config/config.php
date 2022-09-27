<?php
return [
	'db' => [
		'dsn' => 'mysql:host=localhost;dbname=phpcourse',
		'usr' => 'vagrant',
		'pwd' => 'vagrant',
		'opts' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	]
];
