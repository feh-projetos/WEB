<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="shortcut icon" href="img/2.png">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">

	<title>Projeto Acesibilidade</title>
	<head>
	<body>
		<header class="fixo">
		<h1><img class="imglogo" src="img/4.png"></h1>
		<nav class="menu-opcoes">
			<ul class="ajustes">
				<li><a href="index.html">Inicio</a></li>
                
				</header>
		 <div class="container">
	<form class="formulario" method="post"> 
        <h1 class="titulos"> Envie seu cadastro preenchendo o formulário abaixo</h1>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>
        
        <div class="field">
            <label for="telefone">Seu Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
        </div>

        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
        </div>        

       
        <div class="field">
            <label for="senha">Senha:</label>
            <input type="senha" id="email" name="senha" placeholder="Digite sua senha*" required>
        </div>        
        <div class="field radiobox">
            <span>Possui alguma deficiência?</span>
            <input type="radio" name="novidades" id="sim" value="sim" checked><label for="sim">Sim</label>
            <input type="radio" name="novidades" id="nao" value="nao"><label for="nao">Não</label>
        </div>
        <div class="field">
            <label for="mensagem">Sua deficiência:(Se não possui digite :não possuo)</label>
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required></textarea>
        </div>

        <input type="submit" name="acao" value="Enviar">
    </form>


</form>
	</body>
</html>