<?php

// verifica se existe id (metodo passado get)
if (!isset($_GET['id'])) {
    die('acesso negado');
}

$id_contato = $_GET['id']; 
//adicionar a base de dados
require_once('../libs/EasyPDO.php');
require_once('../libs/config.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// desencriptando o hash neste 2° script
$id_contato = aes_desencriptar($id_contato);

if($id_contato == -1 || $id_contato == false){
    die('Acesso invalido');
}

$parameters = [
    ':id_contato' => $id_contato
];
$contato = $bd->select("SELECT * FROM dados WHERE id_contato = :id_contato", $parameters)[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contatos</title>
</head>

<body>

    <form action="../Editar_contatos/editar_contato_submit.php" method="post">
        <input type="hidden" name="id_contato" value="<?= aes_encriptar($id_contato)?>">
        <div>
            <label>Nome:</label>
            <input type="text" name="text_nome" maxlength="50" value="<?= $contato['nome'] ?>">
        </div>
        <div>
            <label>Telefone:</label>
            <input type="text" name="text_telefone" maxlength="20" value="<?= $contato['telefone'] ?>">
        </div>
        <div>
            <input type="submit" value="Guardar">
        </div>
        <div>
            <a href="../Ler_Contatos/ver_contatos.php">Cancelar</a>
        </div>

    </form>


</body>

</html>