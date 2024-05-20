<?php

$req =  $_GET['codigo'];

//echo $req;

$produtos = [ 
        
    ['codigo'=>102040, 'descricao'=>'Produto 1', 'preco' => 120.00],
    ['codigo'=>103040, 'descricao'=>'Produto 2', 'preco' => 240.00],
    ['codigo'=>104040, 'descricao'=>'Produto 3', 'preco' => 119.75],
    ['codigo'=>105040, 'descricao'=>'Produto 4', 'preco' => 24.99],
    ['codigo'=>106040, 'descricao'=>'Produto 5', 'preco' => 34.98],

];

return json_encode($produtos, JSON_PRETTY_PRINT);


