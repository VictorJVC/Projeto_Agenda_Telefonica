<?php

use EasyPDO\EasyPDO;

require_once('../libs/config.php');
require_once('../libs/EasyPDO.php');

$bd = new EasyPDO(MYSQL_OPTIONS);

//buscar todos os contatos
$contatos = $bd->select("SELECT * FROM dados");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Contatos</title>
</head>

<body>
    <h3> Agenda Telefonica </h3>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>-</th>
                <th>-</th>
            </tr>

        </thead>

        <tbody>
            <?php foreach ($contatos as $contato) : ?>
                <tr>
                    <td><?= $contato['nome'] ?></td>
                    <td><?= $contato['telefone'] ?></td>
                    <!--passa para o arquivo por GET ?id=                     começo da encriptacao openssl depois a desemcriptacao para mostrar o valor no link-->
                    <td><a href="../Editar_contatos/editar_contato.php?id=<?= aes_encriptar($contato['id_contato']) ?>">Editar</a></td>
                    <td><a href="../Deletar_Contatos/deletar_contato.php?id=<?= aes_encriptar($contato['id_contato']) ?>">Deletar</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

    <div>
        <a href="../index.php">Voltar</a>
        <span> | </span>
        <a href="../Criar_Contatos/adicionar_contatos.php">Novo Contato</a>
    </div>


</body>

</html>