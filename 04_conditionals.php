<?php
// < less than
// > greater than
// <= less than or equal to
// >= greater than or equal to
// == equal  to
// === identical to
// != not equal to
// !not identical to


// if statements

// if (condition) {
//     code to be excuted if condtion is true
// }

// $age = 15;

// if($age >= 18){
//     echo 'You are old enough to vote';
// } else {
//     echo 'you are too young, go home';
// }

// $t = date("H");

// if($t < 12) {
//     echo 'Good morning';
// } elseif($t < 17) {
//     echo 'Good afternoon';

// } else {
//     echo 'Good evening';
// }

//conditional arrays
 $posts = ['mayon'];

// if(!empty($posts)){
//     echo $posts[0];
// }
//iternary operator

// echo !empty($posts) ? $posts[0] : 'No post';

// using a variable to check for condition

$firstPost = !empty($posts) ? $posts[0] : 'No post';

// echo $firstPost;
// coalescing operator

// $first_post = $posts[0] ?? null;
// echo $first_post

// switch for conditionals

$favcolor = "red";

switch($favcolor){
    case 'red':
        echo 'Your favourite color is red';
        break;

}
?>