<?php

//abertura e include das perguntas de outros arquivos/
echo  "================================================
\nBEM VINDO AO CADERNO DE CAMPO VIRTUAL!
\n================================================\n\n";
echo "Aqui iremos colher as observações feitas em campo\n";

echo "\n------------ PONTO 01 -------------\n";
include "ponto01.php";

echo "\n------------ PONTO 02 -------------\n";
include "ponto02.php";

echo "\n------------ PONTO 03 -------------\n";
include "ponto03.php";

echo "\n------------ PONTO 04 -------------\n";
include "ponto04.php";

//resultado final, mostra de dados
echo  "================================================
\nRESULTADO FINAL:\n================================================
\n\n";

include "retorno.php";





?>
