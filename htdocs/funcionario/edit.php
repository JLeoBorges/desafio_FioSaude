<?php
	include('../conn.php');
	
	$id=$_GET['id'];
	
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$salario=$_POST['salario'];
	$projeto=$_POST['projeto_id'];
	$departamento=$_POST['departamento_id'];
	
	
	mysqli_query($conn,"update funcionarios set nome='$nome', cpf='$cpf', salario_id='$salario', projeto_id='$projeto', departamento_id='$departamento' where id='$id'");
	header('location:index.php');

?>