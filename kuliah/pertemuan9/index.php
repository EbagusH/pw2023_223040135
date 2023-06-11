<?php
require('functions.php');
$title = 'Home'; 
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

// echo $_SERVER["REQUEST_URL"];
// /pw2023_223040135/kuliah/pertemuan9/

require('views/index.view.php');