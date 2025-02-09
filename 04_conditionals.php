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

$t = date("H");

if($t < 12) {
    echo 'Good morning';
} elseif($t < 17) {
    echo 'Good afternoon';

} else {
    echo 'Good evening';
}
?>