<!DOCTYPE html>
<html>
<head>
	<title>Projetos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav nav-pills">
  <li role="presentation"><a href="/funcionario/index.php">Funcionário</a></li>
  <li role="presentation"><a href="/salario/index.php">Salário</a></li>
  <li role="presentation" class="active"><a href="/projeto/index.php">Projeto</a></li>
  <li role="presentation"><a href="/departamento/index.php">Departamento</a></li>
</ul>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Cadastro de Projetos</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar novo</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Nome do Projeto</th>
				<th>Descrição do Projeto</th>
				<th>Ação</th>
			</thead>
			<tbody>
			<?php
				include('../conn.php');
				
				$query=mysqli_query($conn,"select * from projetos");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo ucwords($row['nome']); ?></td>
						<td><?php echo ucwords($row['descricao']); ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Deletar</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>