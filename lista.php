<?php include("cabecalho.php")?>

<center><h2>
	<?php
		$conexao = mysqli_connect("localhost", "root", "", "pessoas");
		
		//Query que será executada
		$query = mysqli_query($conexao,"SELECT * from alunos "); ;
		$array= array();

		//Enquanto existir registros dentro do banco ele sera adicionado a array
		while($array = mysqli_fetch_assoc($query)){
			echo $array['nome']." ";
			echo $array['nascimento'];
			echo("</br>");
		}
		
		/*
		Caso de erro no banco de dados o mysqli_error irá exibir o erro
		$msg = mysqli_error($conexao);
		echo("$msg");
		*/
		
	?>
</center></h2>

<?php include("rodape.php")?>