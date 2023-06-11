<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>


<div class="container">
  <h1>Halaman Home</h1>
  <div class="row">
    <?php foreach ($berita as $brt) : ?>
      <div class="col-3">
        <div class="card mb-3">
          <img src="<?= $brt["poto"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"> <?= $brt["judul"]; ?></p><br>
            <a href="<?= $brt["link"]; ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>