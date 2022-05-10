<?php
// utilizar objeto ou usar o metodo use EasyPDO\EASYPDO

//verificar se foi feito um post
if ($_SERVER['REQUEST_METHOD'] != 'POST') //se invadir/introduzir diretamente a url
{
    die('Acesso Invalido');
}

$nome = $_POST['text_nome'];
$telefone = $_POST['text_telefone'];

//Adicionando a Base de Dados
require_once('../libs/config.php');
require_once('../libs/EasyPDO.php');

$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS); //para usar metodos da classe EasyPDO 

//parametros array associativo
$parameters = [

    ':nome' => $_POST['text_nome'],
    ':telefone' => $_POST['text_telefone']
];

$bd->insert("INSERT INTO dados VALUES(0, :nome, :telefone)", $parameters);
echo 'Contato inserido com sucesso!';

?>
<div><a href="../index.php">Voltar</a>
<span> | </span>
<a href="../Criar_Contatos/adicionar_contatos.php">Novo Contato</a>
<span> | </span>
<a href="../Ler_Contatos/ver_contatos.php">Consultar Contatos</a>
</div>
