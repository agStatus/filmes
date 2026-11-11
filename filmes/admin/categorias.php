<?php 
	include('conexao.php');
?>

<link rel="stylesheet" href="style.css">
<ul>
	<li><a href="categorias.html">Categorias</a></li>
	<li><a href="filmes.html">Filmes</a></li>
</ul>
<main id="categoria">
	<form method="get">
		<h2>Categorias</h2>
		<input type="text" name="categoria" placeholder="Nome Categoria...">
		<button name="salvar">Salvar</button>
	</form>
</main>

<?php

	if(isset($_GET['salvar'])){
		$nomeCategoria = $_GET['categoria'];

		 $sql = "INSERT INTO categoria (nome) values ('$nomeCategoria')";

		 if($conn->query($sql)){
		 	echo "Gravou com sucessooooooooooo!";
		 }else {
		 	echo "Deu ruim";
		 }



	}

	
 ?>