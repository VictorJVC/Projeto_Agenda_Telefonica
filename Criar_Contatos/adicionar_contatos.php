<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contatos</title>
</head>

<body>

    <form action="../Criar_Contatos/adicionar_contatos_submit.php" method="post">
        <div>
            <label>Nome:</label>
            <input type="text" name="text_nome" maxlength="50">
        </div>
        <div>
            <label>Telefone:</label>
            <input type="text" name="text_telefone" maxlength="20">
        </div>
        <div>
            <label>Endereço:</label>
            <input type="text" name="text_endereco" maxlength="50">
        </div>
        <div>
            <input type="submit" value="Guardar">
        </div>
        <div>
            <a href="../index.php">Voltar</a>
            <span> | </span>
            <a href="../Ler_Contatos/ver_contatos.php">Consultar Contatos</a>
        </div>

    </form>
   
</body>

</html>