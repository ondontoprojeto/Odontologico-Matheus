<!DOCTYPE html>
<html>
	<head>
		<title>Odonto - Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHome.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
	</head>
	<body>
		
		<?php include 'header.php'?>
		
		
		<button type="button" class="btn btn-primary btn-md ml-3" data-toggle="modal" data-target="#modal1">Cadastro de Produtos</button>
        <input type="button" class ="btn btn-dark ml-5" onclick="window.print();" value="imprimir">
        <!--Modal-->
			<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title text-primary" id="modalTitle">Cadastro de Produtos</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
			      		<div class="modal-body">
			        		<h5 class="front-left">Descrição do Material</h5>
							<form class = "form-group mt-2" action="agendarCliente.php" method="post">
								<div class="form-group">
									<label for="cpf">N° do Produto:</label>
									<input type="text" class="form-control" id="cpf" placeholder="" name = "nroproduto">
								</div>
								<div class="form-group">
									<label for="nome">Nome do Produto:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "nomeproduto">
								</div>
								<div class="form-group">
									<label for="nome">Categoria:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "categoria">
								</div>
							<div class="form-group">
									<label for="nome">Quantidade:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "quantidade">
								</div>
                                <div class="form-group">
									<label for="nome">Fornecedor:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "fornecedor">
								</div>
                                <div class="form-group">
									<label for="nome">Vencimento:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "vencimento">
								</div>
                                <div class="form-group">
									<label for="nome">Complemento:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "complemento">
								</div>
								<input type="submit" class="btn btn-primary float-right" value = "Cadastrar">
							</form>
			      		</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			
	<div class="container-fluid">
		<div class= "row">

		<div class = "col-4 mt-4">
			<ul class="list-group">
				<li class="list-group-item display-4"><b>Material</b></li>
				<li class="list-group-item">Gaze</li>
				<li class="list-group-item">Touca</li>
				<li class="list-group-item">Mascara</li>
				<li class="list-group-item">Algodão</li> 
				<li class="list-group-item">Álcool 70</li> 
				<li class="list-group-item">Água Destilada</li>
				<li class="list-group-item">Pró-PE</li>
				<li class="list-group-item">Babador</li>
				<li class="list-group-item">Agulha</li>
				<li class="list-group-item">Fio de Sultura</li>
				<li class="list-group-item">Luva P</li>
				<li class="list-group-item">Luva M</li>
				<li class="list-group-item">Luva G</li>
			</ul>
		</div>

			<table class="table w-100 col-8 mt-4">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Código</th>
						<th scope="col">Nome </th>
						<th scope="col">Categoria</th>
						<th scope="col">Quantidade</th>
						<th scope="col">Fornecedor</th>
						<th scope ="col">Vencimento</th>
						<th scope = "col">Complemento</th>
						<th scope = "col"></th>
					</tr>
				</thead>
				<tbody>
						<?php
						include_once 'conexao.php';

						$sql = "SELECT * FROM estoque";

						$busca = mysqli_query($con, $sql);

						while($array = mysqli_fetch_array($busca)){
						
							$codigo = $array['numeroproduto'];
                            $nomeProduto = $array['nomeproduto'];
							$categoria = $array['categoria'];
                            $quantidade = $array['quantidade'];
                            $fornecedor = $array['fornecedor'];
                            $vencimento = $array['vencimento'];
                            $complemento = $array['complemento'];
                                                       

                            //Ajuste da formatação da data DD/MM/AAAA
							// $dtNasci = explode('-', $nascimento);
							// $datadeNascimento = $dtNasci[2] . "-" . $dtNasci[1]. "-" . $dtNasci[0];


					?>
						<tr>
						    <td><?php echo $codigo?></td>
						    <td><?php echo $nomeProduto?></td>
							<td><?php echo $categoria?></td>
							<td><?php echo $quantidade?></td>
							<td><?php echo $fornecedor?></td>
							<td><?php echo $vencimento?></td>
							<td><?php echo $complemento?></td>


							<td><a class="btn btn-dark btn-sm"  style="color:#fff" href="editarCadastro.php?cpf=<?php echo $cpf ?>" role="button"><i class="far fa-edit"></i></a></td>
        				</tr>
					<?php } ?>
				</tbody>
			</table>		
		</div>       
	</div>        
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>