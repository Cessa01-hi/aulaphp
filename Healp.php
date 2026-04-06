<?php

echo "Esta pagina e para nos ajudar";

function textoApp(string $texto)
{
<<<<<<< HEAD
$hora = 0;

$saudacao = "Campo vazio";


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

=======
>>>>>>> b697a19bb0ac3a763f4e8617cc8e96dd1caad345
return $texto;
}
?>