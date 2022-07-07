<?php

class FilmeController
{
	public function index()
	{	
		$pdo = db();
		$statement = $pdo->prepare('SELECT * FROM ausleihen');
		$statement->execute(); // Abfrage wird ausgeführt
		$result = $statement->fetchAll();
		require 'app/Views/filme.view.php';
	}
	
	public function erfassen()
	{
		$pdo = db();
		$statement = $pdo->prepare('INSERT INTO ausleihen (name, email, telefon, mitgliedschaft, ausgeleihtesvideo) VALUES ("Eli", "ELi@underlvl.ru", "079 800 23 45", "Silber", "30 Shades of Gray");');
		$statement->execute();
		// Umleiten auf die Startseite
		header("Location: Projekt/_Framework/filme");
	}
	
}
