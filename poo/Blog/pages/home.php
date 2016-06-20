<?php
	$pdo = new PDO('mysql:dbname=blog;host=localhost:8889', 'root', 'root');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$res = $pdo->query('SELECT * FROM articles');
	$data = $res->fetchAll(PDO::FETCH_OBJ);
	var_dump($data[0]->titre);
	// $count = $pdo->exec('INSERT INTO articles SET titre="Mon Titre", date="' . date('Y-m-j H:i:s') . '"');

?>
