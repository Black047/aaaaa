<html>

<body>
    <?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "root";
    $database = "rede";

    $conexao = new mysqli($hostname, $user, $password, $database);

    if ($conexao->connect_errno) {
        echo "Failed to connect to MySQL: " . $conexao->connect_error;
        exit();
    } else {
        // Evita caracteres epsciais (SQL Inject)
        $altura = $conexao->real_escape_string($_POST['altura']);
        $posicao = $conexao->real_escape_string($_POST['posicao']);
        $nome = $conexao->real_escape_string($_POST['nome']);
        $idade = $conexao->real_escape_string($_POST['idade']);
        $peso = $conexao->real_escape_string($_POST['peso']);
        $salario = $conexao->real_escape_string($_POST['salario']);
        $dadainicio = $conexao->real_escape_string($_POST['dadainicio']);
        $dadafim = $conexao->real_escape_string($_POST['dadafim']);


        $sql = "INSERT INTO rede.usuario
                            (altura, posicao, nome, idade,peso,salario,dadainicio,dadafim)
                        VALUES
                            ('" . $nomeUsuario . "', '" . $senha . "', '" . date('Y-m-d') . "', 's');";

        $resultado = $conexao->query($sql);

        $conexao->close();
        header('Location: index.php', true, 301);
    }
    ?>
</body>

</html>