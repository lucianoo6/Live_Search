<?php
include_once 'config.php';
try {
	$connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
$query = "SELECT * FROM ncm_base 
	WHERE descricao LIKE :descricao
	OR codigo LIKE :codigo
	LIMIT 30
	";
	$q=$connect->prepare($query);
	$q->bindValue(':descricao','%'.$_POST["query"].'%');
	$q->bindValue(':codigo','%'.$_POST["query"].'%');
	$q->execute();
	$rows=$q->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($rows);
	echo $json;
?>