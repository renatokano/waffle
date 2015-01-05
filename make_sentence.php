<?php 
	/*********************************************************
	*	Log
	*
	*	1. Realizar testes backend
	*	2. Incorporar AngularJS
	*	3. Incrementar pontuação
	*	4. Criar framework
	*
	*********************************************************/


	require 'class.JavaScriptPacker.php';
	$script = file_get_contents("code.js");
	$packer = new JavaScriptPacker($script, 'Normal', true, false);
	$packed = $packer->pack();
	file_put_contents("novo.js", $packed);
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Waffle</title>
		<link rel="stylesheet" href="waffle.css"> 
	</head>
	<body>
		<div class="container">
			<h1>Waffle</h1>
			<h2>Descobrimento do Brasil</h2>
			<br>	
			<div id="ms1">
				<p>Ordene a Sentença abaixo:</p>
				<div id="ms1container">
					<ul id="ms1Answer">
					  <li>A nova terra passou </li>
					  <li>a ser chamada de Terra de Santa Cruz.</li>
					  <li>Somente depois da descoberta do pau-brasil,</li>
					  <li>ocorrida no ano de 1511, </li>
					  <li>nosso país passou a ser chamado</li>
					  <li>pelo nome que conhecemos hoje: </li>
					  <li>Brasil.</li>
					</ul>
				</div>
				<button class="btnSend">Confirmar</button>
			</div>
		</div>
		<!-- JS -->

		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script> 
		<!-- 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
		<script src="code.js"></script>
		<!-- <script src="novo.js"></script> -->
	</body>
</html>