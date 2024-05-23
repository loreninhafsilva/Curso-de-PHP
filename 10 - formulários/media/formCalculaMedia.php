<?php 
  if ($_SERVER["REQUEST_METHOD"] === 'GET') { 

	$media = "";	
	$situacao = "";

  } else if ($_SERVER["REQUEST_METHOD"] === 'POST') {  

	    $nota1 = $_POST["nota1"];
	    $nota2 = $_POST["nota2"];

	    if ( (trim($nota1) != "") && (trim($nota2) != "") ) {

		    $media = ($nota1 + $nota2)/2;

			if ($media >= 6.0) {
				$situacao = "<span class='ap'>Aprovado!</span>";
			} else if( ($media > 3.0) && ($media < 6.0) ) {
				$situacao = "<span class='dp'>Dependencia!</span>";
			} else {
				$situacao = "<span class='rep'>Reprovado!</span>";
	        }
	    } else {
	    	echo "Informe as duas notas!";
	    }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Média</title>

	<style type="text/css">
		.ap {
			color: white;
			background-color: green;		
		}

		.dp {
			color: black;
			background-color: yellow;		
		}

		.rep {
			color: white;
			background-color: red;		
		}				
	</style>	
</head>
<body>

	<h1>Cálculo de Média</h1>
	<hr>

	<form method="post">		
		Nota 1:<br>
		<input type="text" name="nota1" required>

		<br><br>

		Nota 2:<br>
		<input type="text" name="nota2" required>

		<hr>
		<input type="submit" value="Calcular Média">
	</form>

	<hr>
	Média: <?=$media; ?>
	<br><br>
	<?=$situacao; ?>		

</body>
</html>