<?php
$title = 'Detail';
require('partials/header.php');
require('partials/nav.php');
?>

<div class="container">
    <h1>Detail Berita</h1>
    <div class="row">
        <div class="col-13">
            <div class="card mb-3">
                <p class="card-text"> <?= $detail_nasional["judul"]; ?></p><br>
                <img src="<?= $detail_nasional["poto"]; ?>" class="card-img-top" alt="...">
                <p class="card-text"> <?= $detail_nasional["artikel"]; ?></p>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>