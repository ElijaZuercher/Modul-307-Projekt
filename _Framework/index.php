<?php
require 'core/bootstrap.php';

$routes = [
	'/home' => 'HomeController@index',
	'/erfassen' => 'HomeController@erfassen',
	'/ausleihen' => 'AusleihenController@index',
	'/ausleihen' => 'AusleihenController@bearbeiten',
	'/ausleihen' => 'AusleihenController@archiv',
	'/filme' => 'FilmeController@index',
	'/filme' => 'FilmeController@erfassen',
];

$db = [
	'name'     => 'videothek',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');