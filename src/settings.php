<?php
$config = [
	'settings' => [
		'displayErrorDetails' => true,
		'logger' => [
			'name' 	=> 'toppack-app',
			'level' => Monolog\Logger::DEBUG,
			'path' 	=> __DIR__ . '/../data/log/development.log',
		],
		'db' => [
			"driver" 	 => "mysql",
			"host" 		 => "localhost",
			"database" => "toppack",
			"username" => "manas",
			"password" => "aEdaq23dQdwOpqCs"
		]
	],
];
