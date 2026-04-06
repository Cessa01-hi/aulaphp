
<?php
// arquivo index responsável pela inicialização do sistema


// é um tipos de comentatios comenta só uma linha
# também e comentario de uma linha
/*
 Esta comentario pode ser 

 em varias linhas
 */
            /* include 'configuracao.php';

            serve para incluir paginas com fonguração menos escencial

            */


            /* require 'configuracao.php';
            requeri serve para incluir na pagina principalmente arquivos de configuração com o banco de dados */


            /*
            require_once  incluis so uma ves a instancia ele é carregado apenas uma ves no nosso sistema
            
            */
require_once 'sistemas/configuracao.php';
include_once 'helpe.php';

// criação de funcões

        echo "<h1>Index um texto</h1>";

       echo saudacao();
echo"<hr>";
      echo resumirTexto();
      echo"<hr>";
      echo saudacao();

?>