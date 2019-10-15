<?php

$idade = 16;
$acompanhado = true;

echo "Você só pode entrar se tiver mais do que 18 anos." .PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos. Pode entrar".PHP_EOL;
} else if($idade >= 16 && $acompanhado){
    echo "Você tem $idade anos. Pode entrar por estar acompanhado".PHP_EOL;
} 
else{
    echo "Você tem $idade anos. Não Pode entrar".PHP_EOL;
}

