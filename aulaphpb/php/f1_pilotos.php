<?php
// Array para armazenar as informações dos pilotos
$pilots = [
    [
        'nome' => 'Lewis Hamilton',
        'idade' => 39,
        'numero' => 44,
        'idadeCarro' => 2
    ],
    [
        'nome' => 'Max Verstappen',
        'idade' => 26,
        'numero' => 1,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Fernando Alonso',
        'idade' => 43,
        'numero' => 14,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Charles Leclerc',
        'idade' => 26,
        'numero' => 16,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Sebastian Vettel',
        'idade' => 37,
        'numero' => 5,
        'idadeCarro' => 2
    ],
    [
        'nome' => 'Valtteri Bottas',
        'idade' => 34,
        'numero' => 77,
        'idadeCarro' => 3
    ],
    [
        'nome' => 'Lando Norris',
        'idade' => 24,
        'numero' => 4,
        'idadeCarro' => 2
    ],
    [
        'nome' => 'Carlos Sainz',
        'idade' => 29,
        'numero' => 55,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Sergio Perez',
        'idade' => 34,
        'numero' => 11,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'George Russell',
        'idade' => 25,
        'numero' => 63,
        'idadeCarro' => 2
    ],
];

// Exibir as informações dos pilotos
foreach ($pilots as $pilot) {
    echo "Nome: " . $pilot['nome'] . "<br>";
    echo "Idade: " . $pilot['idade'] . " anos<br>";
    echo "Número do carro: " . $pilot['numero'] . "<br>";
    echo "Idade do carro: " . $pilot['idadeCarro'] . " ano(s)<br><br>";
}
?>
