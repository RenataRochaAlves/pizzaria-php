<?php 
	include("includes/pizzas.php");
	include("includes/functions.php");

	if($_GET['busca']){
		$trecho = $_GET['busca'];

		$pizzas = buscaPizza($trecho);
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/index.css">
</head>
<body>
	<form id="form-busca" method="GET">
		<input type="text" name="busca" placeholder="Qual pizza você procura?" autocomplete="off">
		<button type="submit">Buscar</button>
	</form>
	
	<main>
		<?php foreach($pizzas as $pizza): ?>
		<article>
			<img src="<?= $pizza['img'] ?>" alt="<?= $pizza['nome'] ?>">
			<a href="/pizzaria-php/pizza.php?id=<?= $pizza['id'] ?>">Ver Mais</a>
			<button>+ Add</button>
			<div><?= $pizza['nome'] ?></div>
			<span>R$ <?= number_format($pizza["preco"], 2, ',', '.')  ?></span>			
		</article>
		<?php endforeach; ?>
	</main>
	
</body>
</html>