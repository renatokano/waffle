<?php 
	/*********************************************************
	*	1. Corrigir toggle (jquery e jquery ui)
	*	2. 
	*	3. 
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
		<title>Newsmart</title>
		
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="newsmart.css"> 
	</head>
	<body>
		<div class="container">
			<h1>Newsmart</h1>
			<h2>Descobrimento do Brasil</h2>
			<br>	
			<div>
				<p>
					Em 22 de abril de 1500 chegava ao Brasil 13 
					<span id="q-drag-drop1" class="q-drag-drop"><img class="arrow" style="height:20px;" src="img/arrow-side.png"></img> caravelas portuguesas</span>.
					A primeira vista, eles acreditavam tratar-se de um grande monte, e chamaram-no de Monte Pascoal. 
				</p>
			</div>
				<div id="q-box1" class="q-box">
					<div id="droppable" class="ui-widget-header">
			  			<p>Quem descobriu o Brasil? <span>_________________________</span></p>
					</div>

					<div class="subtext">
						<p>Arraste e solte no espaço a resposta correta.</p>
					</div>

					<div id="draggable-nonvalid" class="ui-widget-content">
			  			<p>Renatinho Kano</p>
					</div>
			 
					<div id="draggable2" class="ui-widget-content">
			  			<p>Pedro Álvares Cabral</p>
					</div>
				</div>
			<div style="float:left">
				<p>
					No dia 26 de abril, foi celebrada a primeira missa no Brasil. Após deixarem o local em direção à Índia, na incerteza se a terra descoberta tratava-se de um continente ou de uma grande ilha, alterou o nome para Ilha de Vera Cruz. Após exploração realizada por outras expedições portuguesas, foi descoberto tratar-se realmente de um continente, e novamente o nome foi alterado. A nova terra passou a ser chamada de Terra de Santa Cruz. Somente depois da descoberta do pau-brasil, ocorrida no ano de 1511, nosso país passou a ser chamado pelo nome que conhecemos hoje: Brasil. 

				</p>

			</div>
			
			</div>
			 
		</div>
		<!-- JS -->

		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script> 
		<!-- 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
		<script src="code.js"></script>
		<script src="novo.js"></script>
	</body>
</html>