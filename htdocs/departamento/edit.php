<?php
	include('../conn.php');
	
	$id=$_GET['id'];
	
	$nome=$_POST['nome'];
	
	
	mysqli_query($conn,"update departamentos set nome='$nome' where id='$id'");
	header('location:index.php');

?>