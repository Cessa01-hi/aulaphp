<?php



function textoApp(string $texto="Esta pagina e para nos ajudar")
{
return $texto;
}

///////////////////////////////////

function Analizado($saudacao= "bom dia"):string
{
$hora = 14;

if($hora >= 6 && $hora <= 12)
{
    $saudacao = 'Bom dia';
}

if($hora >=13 && $hora <=18)
{
    $saudacao = 'Boa Tarde';
}


return $saudacao;

}
?>