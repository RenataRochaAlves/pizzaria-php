<?php 

include("includes/functions.php");
include("includes/pizzas.php");

if($_GET){
	$id = $_GET['id'];

	$pizza = pizzaPorId($id);

	$anterior = $pizza['id'] - 1;

	$pizzaAnterior = pizzaPorId($anterior);

	$seguinte = $pizza['id'] + 1;

	$pizzaSeguinte = pizzaPorId($seguinte);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<link rel="stylesheet" href="css/pizza.css">
	<main>
		<h1><?= $pizza['nome'] ?></h1>
		<h2>R$ <?= $pizza['preco'] ?></h2>
		<img src="<?= $pizza['img'] ?>" alt="Fracatu">
		<!-- o implode imprime todos os itens do array, no primeiro espaço coloca o separador e depois o array -->
		<div>Ingredientes: <?= implode(', ', $pizza['ingredientes'])?></div>
		<button>+ Add</button>
		<a href="/pizzaria-php/pizza.php?id=<?= $pizzaAnterior['id'] ?>" class="prev">&lt;</a>
		<a href="/pizzaria-php/pizza.php?id=<?= $pizzaSeguinte['id'] ?>" class="next">&gt;</a>
	</main>

</body>
</html>