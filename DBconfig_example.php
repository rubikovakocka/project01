<?php

return [
	'database' => [
		'name' => 'project01',
		'username' => 'root',
		'password' => '',
		'connection' => 'mysql:host=127.0.0.1', //it might be necessary to specify port (example: 127.0.0.1:3306)
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];