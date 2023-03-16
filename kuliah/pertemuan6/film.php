<?php 

$film = [
    [
        'Poster' => 'Avatar.jpeg',
        'Judul' => 'Avatar The Legend of Aang',
        'Tahun' => '2005',
        'Genre' => 'Petualangan',
        'Pemeran Utama' => 'Aang',
        'Sutradara' => 'Lauren MacMullan','Dave Filoni','Giancarlo Volpe','Ethan Spaulding','Joaquim Dos Santos'
    ], 
    [
        'Poster' => 'Sonic.jpeg',
        'Judul' => 'Sonic The Hedgehog',
        'Tahun' => '2020',
        'Genre' => 'action-adventure',
        'Pemeran Utama' =>  ,
        'Sutradara' => ''
    ], 
    [
        'Poster' => 'Eggy',
        'Judul' => ['🍜','🍟','🍕'],
        'Tahun' => '😼',
        'Genre' =>  ,
        'Pemeran Utama' =>  ,
        'Sutradara' =>  
    ], 
    [
        'Poster' => 'Eggy',
        'Judul' => ['🍜','🍟','🍕'],
        'Tahun' => '😼',
        'Genre' =>  ,
        'Pemeran Utama' =>  ,
        'Sutradara' =>  
    ],
    [
        'Poster' => 'Eggy',
        'Judul' => ['🍜','🍟','🍕'],
        'Tahun' => '😼',
        'Genre' =>  ,
        'Pemeran Utama' =>  ,
        'Sutradara' =>  
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