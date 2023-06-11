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
                <p class="card-text"> <?= $detail_esports["judul"]; ?></p><br>
                <img src="<?= $detail_esports["poto"]; ?>" class="card-img-top" alt="...">
                <p class="card-text"> <?= $detail_esports["artikel"]; ?></p>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>