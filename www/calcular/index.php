<html>
    <head>
        <title>.: Meu lindo site :.</title>
	</head>

    <style>
        .botao{
            background-color: red;
        }
        </style>
	
    <body>
        <center>
		<br>
		<form method="post" action="resultado.php" id="info" name="info" >
			Digite o primeiro número: 
			<input type="text" name="primeiro" id="primeiro">
			<br>
			Digite o segundo número:
			<input type="text" name="segundo" id="segundo">
			<br>
            O que você quer fazer:
			<select name="operacao">
		        <option value="somar">Somar</option>
				<option value="diminuir">Diminuir</option>
				<option value="multiplicar">Multiplicar</option>
				<option value="dividir">Dividir</option>
			</select>
			<br>
		    <input type="submit" value="Calcular" class='botao'>
		</form>
		
	</body>
</html>