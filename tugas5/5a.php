<?php

$mahasiswa = [
  [
    "nrp" => "223040135",
    "nama" => "Eggy Bagus Hidayatullah",
    "email" => "eggy@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/eggy.jfif"
  ],
  [
    "nrp" => "223040077",
    "nama" => "Aang",
    "email" => "Aang@gmain.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Aang.jpg"
  ],
  [
    "nrp" => "223040078",
    "nama" => "Satoru Gojo",
    "email" => "Gojo@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Satoru Gojo.jpg"
  ],
  [
    "nrp" => "223040079",
    "nama" => "Kawaragi Senju",
    "email" => "Senju@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Kawaragi Senju.jpg"
  ],
  [
    "nrp" => "223040080",
    "nama" => "Matsuno Chifuyu",
    "email" => "Chifuyu@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Chifuyu.png"
  ],
  [
    "nrp" => "223040081",
    "nama" => "Seishiro Nagi",
    "email" => "Nagi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Nagi.jpg"
  ],
  [
    "nrp" => "223040082",
    "nama" => "Nadya Kheitna Putri",
    "email" => "Una@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Una.jpg"
  ],
  [
    "nrp" => "223040083",
    "nama" => "Muhammad Ridwan",
    "email" => "Ridwan@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Wann.jpg"
  ],
  [
    "nrp" => "223040084",
    "nama" => "Najla Dhia Gunawan",
    "email" => "Najel@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Najel.jpg"
  ],
  [
    "nrp" => "223040085",
    "nama" => " Deden Muhammad Nurhasan,",
    "email" => "Deden@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/Deden.jpg"
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta nama="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 5a</title>
  <style>
    img {
      aspect-ratio: 1;
      width: 256px;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src=" <?= $mhs["gambar"] ?>" alt="profile pic"></li>
      <li>NRP: <?= $mhs["nrp"] ?></li>
      <li>Nama: <?= $mhs["nama"] ?></li>
      <li>Email: <?= $mhs["email"] ?></li>
      <li>Jurusan: <?= $mhs["jurusan"] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>