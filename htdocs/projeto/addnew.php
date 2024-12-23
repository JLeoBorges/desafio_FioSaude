<?php
	include('../conn.php');
	
	$nome=$_POST['nome'];
	$descricao=$_POST['descricao'];
	
	mysqli_query($conn,"insert into projetos (nome, descricao) values ('$nome', '$descricao')");

	header('location:index.php');

?>