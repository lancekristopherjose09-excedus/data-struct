<?php
$student=[
    "studentnumber" => "260360",
    "name" => "lance",
    "course" => "BSIS",
    "subject" => ["infra", "data_struct", "orgma"]
];



$json = json_encode(
    $student,
    JSON_PRETTY_PRINT
);

$student = json_decode($json, true);


echo $json;






?>

