<?php  
require('functions.php');
$title = 'About';

$students= [
    [
      "nama" => "Eggy Bagus Hidayatullah",
      "npm" => "223040135",
      "email" => "eggybagushidayatullah@gmail.com"
    ],
    [
      "nama" => "Arley Prajaya",
      "npm" => "223040106",
      "email" => "arleyprajayagunawan@gmail.com"
    ],
];

require('views/about.view.php');