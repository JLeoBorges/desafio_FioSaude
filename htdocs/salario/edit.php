<?php
	include('../conn.php');
	
	$id=$_GET['id'];
	$salario=$_POST['salario'];
	
	
	mysqli_query($conn,"update salarios set salario='$salario' where id='$id'");
	header('location:index.php');

?>