<?php

require('connection.php');

if (isset($_POST['register'])) {

    $nama     = $_POST['nama'];
    $email          = $_POST['email'];
    $password      = $_POST['password'];

    $sql = "INSERT INTO login (`nama`, `email`, `password`, `level`) VALUES ('$nama', '$email', '$password', 'user')";
    $query = mysqli_query($conn, $sql);

    echo "<script>alert('Register Berhasil!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOT NEWS | Register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Your Name</label>
                                        <input type="text" name="nama" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Your Email</label>
                                        <input type="email" name="email" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password1">Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg" />
                                    </div>



                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="register" class="btn btn-primary btn-block btn-lg gradient-custom-4">Register Account</button>
                                    </div>
                                    <br>
                                    <hr>
                                    <p class="text-center mb-5">Already have an account? <a href="login.php">Login Now</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>