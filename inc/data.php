<?php
include_once 'config.php';
if ( isset( $_POST["query"] ) )
{
    $search = $_POST["query"];
}
else
{
	$search = '';
}
try {
	$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8;", $username, $password);	
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
if($search != ''){
$query = "SELECT * FROM ncm_base 
	WHERE descricao LIKE :descricao
	OR codigo LIKE :codigo
	LIMIT 30
	";
	$q=$connect->prepare($query);
	$q->bindValue(':descricao','%'.$search.'%');
	$q->bindValue(':codigo','%'.$search.'%');
	$q->execute();
	$rows=$q->fetchAll(PDO::FETCH_ASSOC);
	print json_encode($rows);
}
?>