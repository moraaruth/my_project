<?php
// arrays
$numbers = [1,44,55,322];
$fruits = array ("apple", "melon", "lemon");

// echo $numbers;
// print_r($fruits);
// echo $fruits[1];

//associative arrays

$hex = [
    'red' => "#foo",
    'blue' => "0f0",
    'green' => "#oof"
];

// echo $hex['blue'];

//multidimensional arrays
$people = [
  
    [
        'first_name' => 'Ruth',
        'last_name' => 'Moraa',
        'email' => 'moraacodes@gmail.com'
    ],
    [
        'first_name' => 'Dakari',
        'last_name' => 'Imani',
        'email' => 'dakariimani@gmail.com'
    ],
    [
        'first_name' => 'Ruth',
        'last_name' => 'Moraa',
        'email' => 'moraacodes@gmail.com'
    ],
];

print_r( $people)
?>