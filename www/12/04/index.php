<html>
    <head>
        <title>Meu simples site...</title>

    </head>

	<style>
		.divLogin{
			border: 1px solid #969696;
			width: 15%;
			position: absolute;
			right: 3%;
		}
	</style>
	
    <body>

		<div class="divLogin">
			<form method="post" action="verificaLogin.php" id="formlogin" name="formlogin" >
				<label>>Nome: </label>
				<input type="text" name="nomeUsuario" id="nomeUsuario" size="20"><br />
				
				<label>>Senha: </label>
				<input type="password" name="senha" id="senha" size="20">
				<br>
				<center>
					<input type="submit" value="LOGAR"  />
				</center>
			</form>
		</div>

	<center>
		<a href="cadastrar.php">Cadastrar</a>
	</center>

    </body>
</html>
