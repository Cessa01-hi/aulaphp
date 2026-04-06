<?php

function saudacao():string
{
$hora = 0;

$saudacao = "";


if($hora>= 0 && $hora <= 5)
    {
        $saudacao = 'Boa Madrugada';
    }
if($hora >= 5 && $hora <= 12)
    {
        $saudacao = 'Bom dia';
    }
    if($hora >= 13 && $hora <= 18)
    {
        $saudacao = 'Bom Tarde';
    }

     if($hora >= 19 && $hora <= 23)
    {
        $saudacao = 'Bom Boa noite';
    }

return $saudacao;
}
//----------------------------------------------
function resumirTexto(string $texto,int $limite, string $continua = '...'):string
{

return $texto;
}






?>