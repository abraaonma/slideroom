<?php
/*
 * PROJETO - PASSADOR DE SLIDE
 * PARA AULAS ONLINE
 * FAZER GAMIFICAÇÃO 
 */
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sem título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&display=swap" rel="stylesheet">
	<style>
	
		* {
			margin: 0;
			padding: 10px;
		}
			
		.cab {
			font-size: 10pt;
			background-color: #E1EAE5;
			border-radius: 5px;
			font-family: 'Jura', sans-serif;
		}
		
		.cont_left{
			background-color: #A1B2D9;
			width: 270px;
			height:400px;
			padding: 10px;
			float: left;
			border-radius: 5px;
			font-family: 'Jura', sans-serif;
			font-size: 20px;
		}
		
		.cont_right{
			background-color: #f2f3ff;
			width: auto;
			height:400px;
			margin-left: 300px;
			padding: 10px;
			border-radius: 5px;
			font-family: 'Jura', sans-serif;
		}
	
	</style>
</head>

<body>
	
	<!--Cabeçalhos-->
	<section>
		
		<div class="cab">
		
			SLIDEROOM <br>
			Instituição <br>
			Curso <br>
			Disciplina <br>
			Professor <br>
		
		</div>
	
	</section>
	
	<!--Área de conteúdo-->
	<section>
		
		<div class="cont_left">
			
			INTRODUÇÃO À TGA
		
		</div>
		
		<div class="cont_right">
		
			cont_right <br>
			
			<?php
				
				$cont = 1;
				while($cont<11){
					
						echo $cont."<br>";
						$cont++;
					
					}
			
			?>
		
		</div>
		
	</section>

		<!--Botões de controles-->
	<section>
	
		<div class="">
	
			<button>Anterior</button>
			<button>Posterior</button>
	
		</div>
	
	</section>
	
</body>

</html>
