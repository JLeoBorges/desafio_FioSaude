<?php
	include('../conn.php');
	
	$id=$_GET['id'];
	$nome=$_POST['nome'];
	$descricao=$_POST['descricao'];
	
	
	mysqli_query($conn,"update projetos set nome='$nome', descricao='$descricao' where id='$id'");
	header('location:index.php');

?>