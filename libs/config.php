<?php
//utilize seu usuario no mysql ou heidisql utilizando servidor local laragon
define('MYSQL_OPTIONS',
    [
        'db_host' => 'localhost',
        'db_name' => 'contatos',
        'db_user' => 'agenda_tel',
        'db_pass' => '12345',
        'db_char' => 'utf8'
    ]
);
//encriptacao em openssl para protecao dos dados em VER CONTATOS 
define('AES_KEY',':tJRr*ZFIX]&<vWsTASiNI[zi$gH)Omc'); //32 caracteres gerado *****
define('AES_IV','Yv6eNeFeuUM72CBS');

function aes_encriptar($valor){
    return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));
}

// desemcriptar as hashs geradas 
function aes_desencriptar($hash){
    //verificar se a hash é valida
    if(strlen($hash)%2 != 0){ //para permanecer 32 caracteres
        return -1;
    }
    return openssl_decrypt(hex2bin($hash), 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV);
}