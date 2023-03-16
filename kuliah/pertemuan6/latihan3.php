<?php 

// Array Associative
// Array yang indexnya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        'Nama' => 'Eggy',
        'Makanan' => ['🍜','🍟','🍕'],
        'Peliharaan' => '😼'
    ], 
    [
        'Nama' => 'Gio',
        'Makanan' => ['🍗'],
        'Peliharaan' => '🐶'
    ], 
    [
        'Nama' => 'Fadil',
        'Makanan' => ['🍛','🍝'],
        'Peliharaan' => '🦊'
    ], 
    [
        'Nama' => 'Apgi',
        'Makanan' => [],
        'Peliharaan' => '🦅'
    ],
    [
        'Nama' => 'Arley',
        'Makanan' => ['🥚','🥗'],
        'Peliharaan' => '🦝'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $i => $ms) { ?>
    <ul>
        <li>Nama: <?= $ms ['Nama']; ?></li>
        <li>Makanan Favorit:
            <?php foreach ($ms ['Makanan'] as $m ) {
                echo $m;
            } ?>
        </li>
        <li>Peliharaan: <?= $ms ['Peliharaan']; ?></li>
    </ul>
    <?php } ?>    
</body>
</html>