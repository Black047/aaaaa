<html>
    <head>
        <title>.: Meu lindo site :.</title>
    
		<style>
			.imagemLogo{
				width:8%;
				height:12%;
			}
			
			.tituloSite{
				position:absolute;
				top:22px;
				font-size:44px;
				text-shadow:2px 2px #ff0000;
			}
		</style>
	</head>
	
    <body>
		<?php
			// iniciar uma sessão
			session_start();

			if (empty($_SESSION['nomeUsuario'])){
				// Logado??? Não?? Tchau, bb.
				header('Location: sair.php');
				exit();
			} else {
				echo '<table>
					<tr>
						<td width=50%>
							<center>
							<span class="corBranca">Bem vindo, '.$_SESSION['nomeUsuario'].'</span>
							<br>
							<a href="perfil.php">Perfil</a>
							</center>
						</td>
						<td width=50%>
							<center>
							<form method="post" action="busca.php" id="formBusca" name="formBusca" >
								<span style="font-size:20px;">BUSCAR:</span><br>
								<input type="text" name="busca" id="busca">
								<br>
								<input type="submit" value="BUSCAR"/>
							</form>
							</center>
						</td>
						</tr>
						<tr>
							<td colspan=2>
								<center>
									Enviar mensagem:
									Aqui vai o texto da mensagem.
								</center>
							</td>
					</tr>
				</table>';
			}
		?>
		<a href="sair.php">Sair</a>
	</body>
</html>
