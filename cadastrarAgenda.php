<?php

	include_once 'conexao.php';

	//Marcação de consulta
	
	$nome =  $_POST['nome'];
	$nomeconsulta =  $_POST['nomeconsulta'];	
	$dia =  $_POST['dia'];
	$hora =  $_POST['hora'];
	$descricao =  $_POST['descricao'];
	$nomedentista =  $_POST['nomedentista'];
	$procedimento_1 = $_POST['tipoproce1'];
	$valor_1 = $_POST['valor1'];

   echo $sql = "INSERT INTO atend VALUES(null, '{$nome}','{$nomeconsulta}','{$dia}','{$hora}','{$descricao}', '{$nomedentista}','{$procedimento_1}','{$valor_1}')"; 

   //echo $sql = "INSERT INTO paciente VALUES(null, '{$nome}',{id_pessoa}')"; 




   

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgAgenda.php?msg=".$msg);
?>