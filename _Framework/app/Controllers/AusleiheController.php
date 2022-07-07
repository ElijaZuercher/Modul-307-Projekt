<?php

class AusleiheController
{
	public function index()
	{	
		$pdo = db();
		$statement = $pdo->prepare('SELECT * FROM ausleihen');
		$statement->execute(); // Abfrage wird ausgeführt
		$result = $statement->fetchAll();
		require 'app/Views/ausleihen.view.php';
	}
	
	public function bearbeiten()
	{
		$pdo = db();
		$statement = $pdo->prepare('INSERT INTO ausleihen (name, email, telefon, mitgliedschaft, ausgeleihtesvideo) VALUES ("Eli", "ELi@underlvl.ru", "079 800 23 45", "Silber", "30 Shades of Gray");');
		$statement->execute();
		header("Location: Projekt/_Framework/ausleihen");
	}

    public function löschen()
	{
		$pdo = db();
		$statement = $pdo->prepare('INSERT INTO ausleihen (name, email, telefon, mitgliedschaft, ausgeleihtesvideo) VALUES ("Eli", "ELi@underlvl.ru", "079 800 23 45", "Silber", "30 Shades of Gray");');
		$statement->execute();
		header("Location: Projekt/_Framework/ausleihen");
	}
	
}
