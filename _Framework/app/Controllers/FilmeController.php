<?php

class FilmeController
{
	public function index()
	{	
		
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
