<?php
include 'config.php';
$connect = mysqli_connect($host, $user, $password, $database);
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM ncm_base 
	WHERE descricao LIKE '%".$search."%'
	OR codigo LIKE '%".$search."%'
	LIMIT 30
	";

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	echo json_encode($rows);
}
}
?>