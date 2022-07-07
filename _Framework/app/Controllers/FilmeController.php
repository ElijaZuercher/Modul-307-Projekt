<?php

class FilmeController
{
	public function index()
	{	
		$pdo = db();
		$statement = $pdo->prepare('SELECT * FROM ausleihen WHERE id=:id');
		$statement->bindParam(':id', $_GET['id']);
		$statement->execute(); // Abfrage wird ausgeführt
		$result = $statement->fetchAll();
		require 'app/Views/filme.view.php';
	}
	
	public function zurückgeben()
	{
		$pdo = db();
		$statement = $pdo->prepare('UPDATE ausleihen SET ausleihstatus = 0 WHERE id = :id');
		$statement->bindParam(':id', $_GET['id']);
		$statement->execute();
		$ausleihid = $_GET['id'];
		// Umleiten auf die Startseite
		header("Location: filme?id=$ausleihid");
	}
	
}
