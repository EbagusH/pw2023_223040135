<?php 

$film = [
    [
        'Poster' => 'Avatar.jpeg',
        'Judul' => 'Avatar The Legend of Aang',
        'Tahun' => '2005',
        'Genre' => 'Petualangan',
        'Pemeran Utama' => 'Aang',
        'Sutradara' => 'Lauren MacMullan'
    ], 
    [
        'Poster' => 'Sonic.jpeg',
        'Judul' => 'Sonic The Hedgehog',
        'Tahun' => '2020',
        'Genre' => 'action-adventure',
        'Pemeran Utama' => 'James Marsden',
        'Sutradara' => 'Jeff Fowler'
    ], 
    [
        'Poster' => 'Aquaman.jpg',
        'Judul' => 'Aquaman',
        'Tahun' => '2018',
        'Genre' => 'Petualangan',
        'Pemeran Utama' => 'Jason Momoa',
        'Sutradara' => 'James Wan'
    ], 
    [
        'Poster' => 'White Raven.png',
        'Judul' => 'Sniper The White Raven',
        'Tahun' => '2022',
        'Genre' => 'War',
        'Pemeran Utama' => 'Pavlo Aldoshyn',
        'Sutradara' => 'Maryan Bushan'
    ],
    [
        'Poster' => 'Jujutsu Kaisen.png',
        'Judul' => 'Jujutsu Kaisen',
        'Tahun' => '2022',
        'Genre' => 'Animasi',
        'Pemeran Utama' => 'Yuta Okkotsu (Megumi Ogata)',
        'Sutradara' => 'Sunghoo Park'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
</head>
<body>
<h2>Daftar Film</h2>
    <?php foreach($film as $i => $flm) { ?>
    <ul>
        <li>Nama: <?= $flm ['Nama']; ?></li>
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