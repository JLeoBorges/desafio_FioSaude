<?php
	include('../conn.php');
	
	$nome=$_POST['nome'];
	
	
	mysqli_query($conn,"insert into departamentos (nome) values ('$nome')");
	header('location:index.php');

?>