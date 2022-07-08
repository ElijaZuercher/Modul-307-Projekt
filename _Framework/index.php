<?php
require 'core/bootstrap.php';

$routes = [
	'/home' => 'HomeController@index',
	'/erfassen' => 'HomeController@erfassen',
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