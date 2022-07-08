<?php

class HomeController
{
	public function index()
	{	
		$pdo = db();
		$statement = $pdo->prepare('SELECT * FROM ausleihen WHERE ausleihstatus=1 ORDER BY id DESC');
		$statement->execute(); // Abfrage wird ausgeführt
		$result = $statement->fetchAll();
		$statement = $pdo->prepare('SELECT * FROM movies');
		$statement->execute();
		$result2 = $statement->fetchAll();
		require 'app/Views/home.view.php'; 
	}
	
	public function erfassen()
	{
		if($_SERVER['REQUEST_METHOD']==='POST') {
			$pdo = db();
			$statement = $pdo->prepare('INSERT INTO ausleihen (name, email, telefon, mitgliedschaft, ausgeleihtesvideo, ausleihstatus) VALUES (:name, :email, :telefon, :mitgliedschaft, :film, 1);');
			if($_POST['name'] == '' ) {
				echo "<script type='text/javascript'>window.alert('Bitte einen Namen eingeben'); window.location.href='home';</script>";
			} elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo "<script type='text/javascript'>window.alert('Bitte eine gültige E-Mailadresse eingeben'); window.location.href='home';</script>";
			} elseif (!preg_match('/^[\+ 0-9]+$/', $_POST['telefon'])){
				echo "<script type='text/javascript'>window.alert('Bitte eine gültige Telefonnummer eingeben'); window.location.href='home';</script>";
			} else {
				$statement->bindParam(':name', $_POST['name']);
				$statement->bindParam(':email', $_POST['email']);
				$statement->bindParam(':telefon', $_POST['telefon']);
				$statement->bindParam(':mitgliedschaft', $_POST['mitgliedschaft']);
				$statement->bindParam(':film', $_POST['film']);
				$statement->execute();
				header("Location: home");
			}
		}
		// Umleiten auf die Startseite
	}
	
}
