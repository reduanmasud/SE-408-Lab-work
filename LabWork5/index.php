<?php
require 'app/app.php';

$app = [
    'title' => 'Index page'
];



$data = [
    'task' => "Index Page",
    'pages' => [
        'Variable declaration, simple calculation, result output.',
        'Any program using conditional statement.',
        'Any program using loops (for, do...while, while),',
        'Array declaration, printing, sorting and adding array element.',
        'Declaration of function using any program'
    ]
];

view('index', $data);

