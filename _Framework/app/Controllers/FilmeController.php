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
		$statement = $pdo->prepare('SELECT * FROM ausleihen WHERE ausleihstatus=1 ORDER BY datum DESC');
		$statement->execute(); // Abfrage wird ausgeführt
		$result2 = $statement->fetchAll();
		$statement = $pdo->prepare('SELECT * FROM movies');
		$statement->execute();
		$result3 = $statement->fetchAll();
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
	public function bearbeiten(){
		$pdo = db();
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mitgliedschaft = $_POST['mitgliedschaft'];
		$film = $_POST['film'];
		$datum = $_POST['datum'];
		$id = $_GET['id'];
		if($name != ""){
			$statement = $pdo->prepare('UPDATE ausleihen SET name = :name WHERE id = :id');
			$statement->bindParam(':id', $id);
			$statement->bindParam(':name', $name);
			$statement->execute();
		}
		if($email != ""){
			$statement = $pdo->prepare('UPDATE ausleihen SET email = :email WHERE id = :id');
			$statement->bindParam(':id', $id);
			$statement->bindParam(':email', $email);
			$statement->execute();
		}
		if($mitgliedschaft != ""){
			$statement = $pdo->prepare('UPDATE ausleihen SET mitgliedschaft = :mitgliedschaft WHERE id = :id');
			$statement->bindParam(':id', $id);
			$statement->bindParam(':mitgliedschaft', $mitgliedschaft);
			$statement->execute();
		}
		if($film != ""){
			$statement = $pdo->prepare('UPDATE ausleihen SET ausgeleihtesvideo = :film WHERE id = :id');
			$statement->bindParam(':id', $id);
			$statement->bindParam(':film', $film);
			$statement->execute();
		}
		if($datum != NULL){
			$statement = $pdo->prepare('UPDATE ausleihen SET datum = :datum WHERE id = :id');
			$statement->bindParam(':id', $id);
			$statement->bindParam(':datum', $datum);
			$statement->execute();
		}
		// Umleiten auf die Startseite
		header("Location: filme?id=$id");
		var_dump($_POST);
	}
	
}
