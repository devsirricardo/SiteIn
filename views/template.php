<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>MVC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
	</head>
	<body>
			<div class="topo">
				<div class="topo1"></div>
				<div class="banner"></div>				
			</div>
			<div class="menu">
				<ul>
					<a href="/"><li>HOME</li></a>
					<a href="/portfolio"><li>PORTFÓLIO</li></a>
					<a href="/sobre"><li>SOBRE</li></a>
					<a href="/servicos"><li>SERVIÇOS</li></a>
					<a href="/contatos"><li>CONTATOS</li></a>
				</ul>
			</div>

			

			<div class="container">
				<?php
        			$this->loadViewInTemplate($viewName, $viewData);
        		?>
			</div>	

			<div class="rodape">
			</div>


		
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>