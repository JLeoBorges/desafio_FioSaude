<?php
	include('../conn.php');
	
	$salario=$_POST['salario'];
	mysqli_query($conn,"insert into salarios (salario) values ('$salario')");
	header('location:index.php');

?>