<?php





$arr = [1, 10, 3, 14, 5, 6];

echo 'array before sort <br>';
print_r($arr);

sort($arr);

echo '<br> Array after sort <br>';
print_r($arr);










/***
$arr = [1, 2, 3, 4, 5, 6];


$arr_2 = [
    'class_1' => 10,
    'class_2' => 20
];


//I can use for loop here instead I will use print_r; for the printing purpose
echo 'Arr 1';
echo '<br>';
print_r($arr);

echo '<br>';

echo 'Arr 2';
echo '<br>';
print_r($arr_2);
echo '<br>';

//There are variouse ways of adding data in array but I am using simplest one.
echo 'Arr 1';
echo '<br>';
$arr[] = [4];
print_r($arr);

**/