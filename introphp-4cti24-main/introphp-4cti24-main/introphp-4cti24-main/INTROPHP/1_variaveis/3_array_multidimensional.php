<?php
$carros = array(
    'lançamentos' =>{
    '2010' => array(
        'fiat' => 'Bravo';
        'ford' => 'Novo Focus';
        'renoult' = 'Duster';
    ),
    '2015' => array(
        'bmw' => 'x3';
        'chrevolet' => 'S10 Hight country';
        'ford' => 'Edge';
    ),
        '2020' => array(
            'chevrolet' ='Onix plus';
            'nissan' ='versa';
            'Volkwagen' = 'Novo Nívus';
         )
);
echo" O lançamento do {$carros['2020']['chevrolet']} foi em 2020";
    ?>