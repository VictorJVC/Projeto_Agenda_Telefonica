<?php

//eliminar contato

if(!isset($_GET['id'])){
    die('Acesso invalido');
}
$id_contato = $_GET['id'];

//eliminar base de dados
require_once('../libs/config.php');
require_once('../libs/EasyPDO.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

//desemcriptar esse é o 1° pois começou a encriptar em ver contatos
$id_contato = aes_desencriptar($id_contato);


$parameters = [
    ':id_contato' => $id_contato
];
$bd -> delete("DELETE FROM dados WHERE id_contato= :id_contato",$parameters);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Eliminado</title>
</head>
<body>
    <h5>Contato Eliminado</h5>
    <div>
        <a href="../Ler_Contatos/ver_contatos.php">voltar</a>
    </div>
    
</body>
</html>