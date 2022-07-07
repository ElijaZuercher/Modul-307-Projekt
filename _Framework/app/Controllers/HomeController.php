<?php

class HomeController
{
	public function index()
	{	
		$pdo = db();
		$statement = $pdo->prepare('SELECT * FROM ausleihen');
		$statement->execute(); // Abfrage wird ausgeführt
		$result = $statement->fetchAll();
		require 'app/Views/home.view.php'; 
	}
	
	public function erfassen()
	{
		if($_SERVER['REQUEST_METHOD']==='POST') {
			$pdo = db();
			$statement = $pdo->prepare('INSERT INTO ausleihen (name, email, telefon, mitgliedschaft, ausgeleihtesvideo) VALUES (:name, :email, :telefon, :mitgliedschaft, :film);');
			$statement->bindParam(':name', $_POST['name']);
			$statement->bindParam(':email', $_POST['email']);
			$statement->bindParam(':telefon', $_POST['telefon']);
			$statement->bindParam(':mitgliedschaft', $_POST['mitgliedschaft']);
			$statement->bindParam(':film', $_POST['film']);
			$statement->execute();
		}
		// Umleiten auf die Startseite
		header("Location: home");
	}
	
}
