<html>
    <head>
        <title>.: Meu lindo Resultado :.</title>
	</head>
	
    <body>
        <center>
		<br>
		<?php

            $tabuada = $_POST["tabuada"];
            for ($i = 1; $i <= 10; $i++) {
                echo $i.' x '. $tabuada . ': ';
                echo $i * $tabuada;
                echo '<br>';
            }

        ?>
		</center>
	</body>
</html>