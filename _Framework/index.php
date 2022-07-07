<?php
require 'core/bootstrap.php';

$routes = [
	'/home' => 'HomeController@index',
	'/erfassen' => 'HomeController@erfassen',
	'/ausleihen' => 'AusleihenController@index',
	'/ausleihen1' => 'AusleihenController@bearbeiten',
	'/ausleihen2' => 'AusleihenController@archiv',
	'/filme' => 'FilmeController@index',
	'/zurückgeben' => 'FilmeController@zurückgeben',
	'/bearbeiten' => 'FilmeController@bearbeiten'
];

$db = [
	'name'     => 'videothek',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');