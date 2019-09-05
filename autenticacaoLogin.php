<?php
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	include_once 'conexao.php';

	$select = mysqli_select_db($con, "odontologico") or die("Sem acesso ao DB, Entre em contato com o Administrador.");

	$sql = "SELECT * FROM login WHERE `login` = '$login' AND `senha`= '$senha'";

	$result = mysqli_query($con, $sql);

	while($array = mysqli_fetch_array($result)){

		$idUser = $array['id_user'];
		$nome = $array['nome'];
		$senha = $array['senha'];
		$perfil = $array['perfil'];

        if(mysqli_num_rows ($result) > 0 ){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location:home.php');
        } else {
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            header('location:login.php');
          };
    };
?>
