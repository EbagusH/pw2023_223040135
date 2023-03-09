<?php 
    // Array
    // Membuat Array

    $hari = array ('senin','selasa','rabu');
    $bulan = ['januari','february','maret'];
    $Array = ['Eggy',18,false];
    $binatang = ['🙈','🐺','🐱','🦁','🐷'];

    // Menampilkan Array
    // Menampilkan satu - satu
    
    echo $hari[2];
    echo "<br>";
    // Menampilkan Array dan informasi lain
    
    var_dump($binatang);
    echo "<br>";
    print_r($bulan);
    echo "<hr>";

    //Memanipulasi isi Array

    $hari[] = "kamis";
    $hari[] = "jumat";

    print_r($hari);
    echo "<hr>";

    // MEnambahkan elemen baru di akhir array menggunakan array_push()

    array_push($bulan, 'april','mei','juni','juli');
    print_r($bulan);
    echo "<hr>";

    // Menambah lewat depan

    array_unshift($binatang, '🐩','🐊');
    print_r($binatang);
    echo "<hr>";

    // MEnghapus elemen terakhir di akhir array

    array_pop($hari);
    print_r($hari);
    echo "<hr>";

    //Menghapus dari depan

    array_shift($hari);
    print_r($hari);
    echo "<hr>";
?>