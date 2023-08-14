<?php

include_once('models/Student.php');
include_once('models/Score');

// $student = student::all();
// $score = Score::all();

// var_dump($students);
// var_dump($scores);

$create = Student::create([
    'name' => "firman ramadhan"
]);

var_dump($create);

?>