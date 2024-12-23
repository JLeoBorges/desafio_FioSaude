<?php
	include('../conn.php');
	
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$salario=$_POST['salario'];
	$projeto=$_POST['projeto_id'];
	$departamento=$_POST['departamento_id'];
	
	mysqli_query($conn,"insert into funcionarios (nome, cpf, salario_id, projeto_id, departamento_id) values ('$nome', '$cpf', '$salario', '$projeto', '$departamento' )");
	header('location:index.php');

?>