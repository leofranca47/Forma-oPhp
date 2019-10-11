<?php
$idade = 32;

echo "Olá mundo!" .PHP_EOL;

echo 'minha idade é '.$idade.' anos ';

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, tiver mais que 18 anos\n";

if($idade >= 18)
{
    echo "você tem $idade anos. Pode entrar";
} else{
    echo "você tem $idade anos. Não pode entrar";
}

echo PHP_EOL;




