<html>
    <head>
        <title>.: Meu lindo Resultado :.</title>
	</head>
	
    <body>
        <center>
		<br>
		<?php
            $operacao = $_POST["operacao"];
            $num1 = $_POST["primeiro"];
            $num2 = $_POST["segundo"];
            $resultado = 0;

            if ($operacao == 'somar'){
                $resultado = $num1 + $num2;
            } elseif ($operacao == 'diminuir'){
                $resultado = $num1 - $num2;
            }
            echo "<p class='resposta'> O resultado da soma Ã©: ";
            echo $resultado;

        ?>
		</center>
	</body>
</html>