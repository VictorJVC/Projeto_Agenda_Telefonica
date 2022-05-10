<?php

//verificar se existe um post
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso Negado');
}


//abrir a base de dados
require_once('../libs/EasyPDO.php');
require_once('../libs/config.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

//buscar os dados a editar, usando encriptacao para protecao sempre depois da importacao do conifg.php
$id_contato = aes_desencriptar($_POST['id_contato']);

if($id_contato == -1 || $id_contato == false){
    die('Acesso invalido');
}

$nome = $_POST['text_nome'];
$telefone = $_POST['text_telefone'];
$endereco = $_POST['text_endereco'];


$parameters = [
    ':id_contato' => $id_contato,
    ':nome' => $nome,
    ':telefone' => $telefone,
    ':endereco' => $endereco
];

$bd->update("UPDATE dados SET nome = :nome, telefone = :telefone, endereco = :endereco WHERE id_contato = :id_contato", $parameters);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Contato Atualizado!</h3>
    <a href="../Ler_Contatos/ver_contatos.php">Voltar</a>
    
</body>
</html>