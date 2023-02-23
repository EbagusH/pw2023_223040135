<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php echo 'Hello, World!'; ?>
    </h1>
    <p>
    <?php echo 'Pemrograman, Web!'; ?>
    </p>
    <p>
        <?php echo '"PENGUMUMAN"' . ":Hari Jum'at libur" ?>
    </p>

    <hr>

    <?php 
    $nama_depan = 'Asep' ;
    $nama_belakang = 'Kusep' ;
    ?>
    <p>
        <?php echo "Hello, $nama_depan $nama_belakang" ;?>
    </p>
</body>
</html>