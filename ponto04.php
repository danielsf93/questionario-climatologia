<?php


//observações a serem colhidas:

echo "\n Informe a Coordenada UTM X:\n";
$utmx = readline(">> ");
echo "\n Informe a Coordenada UTM Y:\n";
$utmy = readline(">> ");
echo "\n Informe a Altitude:\n";
$altitude = readline(">> ");
echo "\n Informe a Temperatura:\n";
$temperatura = readline(">> ");
echo "\n Informe a Pressão Atmosférica:\n";
$pressao = readline(">> ");
echo "\n Informe a Umidade:\n";
$umidade = readline(">> ");
echo "\n Informe a Luminosidade\n";
$lux = readline(">> ");
echo "\n Informe a Velocidade do Vento:\n";
$vvento = readline(">> ");





$arquivo_final4 = ["UTMX"=>"$utmx", "UTMY"=>"$utmy", "Altitude"=>"$altitude", "Temperatura"=>"$temperatura", "Pressão atmosférica"=>"$pressao", "Umidade"=>"$umidade", "Luminosidade"=>"$lux", "Velocidade do Vento"=>"$vvento"];


?>
