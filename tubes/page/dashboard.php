<?php
require("../connection.php");

function query($data)
{
    global $conn;

    $result = mysqli_query($conn, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$artikel = query("SELECT * FROM artikel");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>HOT NEWS</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="icon/hot-solid-24.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">HOT NEWS</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../index.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="profile.php">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="nav-link">
                <li class="">
                    <a href="../logout.php" onclick="return confirm('Log-out?')">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text-dashboard">Daftar Berita</div>

        <div class="container mt-3">



            <table border="1" cellpadding="10" cellspacing="0" class="table" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Artikel</th>
                        <th scope="col">Tanggal Rilis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($artikel as $news) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $news["gambar"]; ?>" width="70"></td>
                            <td><?= $news["judul"]; ?></td>
                            <td><textarea><?= $news["isi_artikel"]; ?></textarea></td>
                            <td><?= $news["tanggal_rilis"]; ?></td>
                            <td>
                                <a href="" class="badge text-bg-warning">ubah</a> |
                                <a href="" class="badge text-bg-danger">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        </div>

    </section>

    <script src="index.js"></script>

</body>