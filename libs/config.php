<?php
//utilize seu usuario no mysql ou heidisql utilizando servidor local laragon
//constantes com array associativo para passar como argumento pra dentro da classe EASYPDO
define('MYSQL_OPTIONS',
    [                    //preencher
        'db_host' => 'localhost',
        'db_name' => '', //aqui
        'db_user' => '', //aqui
        'db_pass' => '', //aqui
        'db_char' => 'utf8'
    ]
);
//encriptacao em openssl para protecao dos dados em VER CONTATOS 
define('AES_KEY',':tJRr*ZFIX]&<vWsTASiNI[zi$gH)Omc'); //32 caracteres gerado  /// Gere novo se precisar
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