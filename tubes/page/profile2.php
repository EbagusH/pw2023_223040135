<?php
session_start();

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

$id = $_SESSION['id_user'];

$user = query("SELECT * FROM `login` WHERE id = '$id'")[0];

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
                        <a href="profile2.php">
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

    <section class="home" style="padding:20px 50px;">

        <div class="text-profile">My Profile</div>

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">

                </div>
                <div class="row mt-3">
                    <h1>Name : <?= $user['nama'] ?></h1>
                    <h1>Email : <?= $user['email'] ?></h1>
                    <h1>Level : <?= $user['level'] ?> </h1>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>

    <script src="index.js"></script>

</body>