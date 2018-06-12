<?php include("cabecalho.php");?>

		<center>
		
		<h1>Cadastro de pessoas</h1>
			<form action="adicionarPessoas.php" method="post" >
				Nome:
				<input type="text" name="nome"></br></br>
				Ano de Nascimento:
				<input type="number" name="ano" ></br></br>
				
				<input type="submit" value="Enviar dados">
			</form>
			</br>
			
			<!- Botao para listar -!>
			
			<form action="lista.php">
				<input type="submit" value="Lista">
			</form>
		<center>
		
		
<?php include("rodape.php");?>
