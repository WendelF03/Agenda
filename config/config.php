<?php
#Caminhos absolutos
$dirInt ="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#BAnco de Dados
define('HOST','localhost');
define('DB','agenda');
define('USER','root');
define('PASS','');

#Incluir arquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');