<?php
//declare(strict_types = 1);
require_once 'processa/connecta.php';
include_once 'Healp.php';

$texto = "texto para resumir";

$string = "texto";
$int = 1;
$float = 9.9;
$bool = false;
$nulo = null;

var_dump($texto);
echo '<hr>';
echo saudacao();
echo'<hr>';
echo resumirTexto($texto,50);

?>