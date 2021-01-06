<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro Qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua ', '50');

//echo $umEndereco->rua; é possível pelo __get (método mágico)

echo $umEndereco . PHP_EOL;
echo $outroEndereco;