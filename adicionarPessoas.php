<?php include("cabecalho.php"); ?>
	<?php
		$nome= $_POST['nome'];
		$ano= $_POST['ano'];
		
		//$conexao recebe os parametros para se realizar a conexão
		$conexao = mysqli_connect("localhost", "root", "", "pessoas");
		
		$query= "insert into alunos(nome,nascimento) values ('$nome',$ano)";

		//Conecta e executa a query no db
		mysqli_query($conexao, $query);
		
		/*
		$msg = mysqli_error($conexao);
		echo("$msg </br>");
		*/
		
		echo("Nome:  $nome</br>");
		echo("Nascimento: $ano");
		
		
	?>

<?php include("rodape.php"); ?>