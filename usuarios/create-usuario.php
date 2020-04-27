<?php 


$nome = '';
$senha = '';
$confirmacao = '';
$telefone = '';
$endereco = '';
$email = '';

$nomeOk = true;
$senhaOK = true;
$confirmacaoOk = true;
$telefoneOk = true;
$enderecoOk = true;
$emailOk = true;

// verifica se foram enviados dados
if($_POST){
    // cria a persistência de dados
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmacao = $_POST['confirmacao'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];

    // mede o tamanho da string e diz se ela é menor
    if(strlen($nome) < 5){
        $nomeOk = false;
        // interrompe o script e imprime a mensagem na tela
        // die("Nome Inválido");
    }
    if($senha != $confirmacao || strlen($senha) < 5){
        $senhaOk = false;
        $confirmacaoOk = false;
    }
    if(strlen($telefone) < 10) {
        $telefoneOk = false;
    }
    if(strlen($endereco) < 20) {
        $enderecoOk = false;
    }
    if(strpos($email, '@') == false){
        $emailOk = false;
    }
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<link rel="stylesheet" href="../css/form-usuario.css">
	<form id="form-usuario" method="POST">
		<label>
            Nome:
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
            <?= ($nomeOk? '': '<span class="erro">Preencha o campo com um nome válido') ?>
        </label>
		<label>
            Telefone:
            <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone" value="<?= $telefone ?>">
            <?= ($telefoneOk? '': '<span class="erro">Digite um telefone válido')?>
        </label>
		<label>
            E-mail:
            <input type="email" name="email" id="email" placeholder="Digit$e seu email" value="<?= $email ?>">
            <?= ($emailOk? '': '<span class="erro">O e-mail está incorreto') ?>
        </label>
		<label>
            Endereço:
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereco" value="<?= $endereco ?>">
            <?= ($enderecoOk? '': '<span class="erro">Digite um endereço válido')?>
        </label>
		<label>
            Senha:
            <input type="password" name="senha" id="senha" placeholder="Digite uma senha" value="<?= $senha ?>">
            <?= ($senhaOk? '': '<span class="erro">A senha e a confirmação de senha estão diferentes') ?>
        </label>
		<label>
            Confirmação:
            <input type="password" name="confirmacao" id="confirmacao" placeholder="Confirme a senha digitada">
            <?= ($corfirmacaoOk? '': '<span class="erro">A senha e a confirmação de senha estão diferentes') ?>
        </label>
		<label>
            <img src="../img/no-image.png" id="foto-carregada">
            <div>Clique para selecionar sua foto</div>
            <input type="file" name="foto" id="foto">
        </label>
        <div class="controles">
            <button type="reset" class="secondary">Resetar</button>
            <button type="submit" class="primary">Cadastrar-se!</button>
        </div>
    </form>
    <script>
        document.getElementById("foto").onchange = (evt) => {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("foto-carregada").src = e.target.result;
            };
            reader.readAsDataURL(evt.target.files[0]);
        };
    </script>
</body>
</html>