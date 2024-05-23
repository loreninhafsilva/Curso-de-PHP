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

<?php
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];

    if ( (trim($nota1) != "") && (trim($nota2) != "") ) {

	    $media = ($nota1 + $nota2)/2;

	    echo "Média = " . $media;
	    echo "<hr>";

		if ($media >= 6.0) {
			echo "<span class='ap'>Aprovado!</span>";
		} else if( ($media > 3.0) && ($media < 6.0) ) {
			echo "<span class='dp'>Dependencia!</span>";
		} else {
			echo "<span class='rep'>Reprovado!</span>";
        }
    } else {
    	echo "Informe as duas notas!";
    }
?>
</body>
</html>