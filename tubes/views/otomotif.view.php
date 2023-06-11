<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>


      <div class="container">
        <h1>Halaman Berita Otomotif</h1>
        <div class="row">
            <?php foreach($otomotif as $omtf) :?>
            <div class="col-3">
              <div class="card mb-3">
                <img src="<?= $omtf["poto"];?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"> <?= $omtf["judul"]; ?></p><br>
                  <a href="<?= $omtf["link"]; ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

      <?php require('partials/footer.php'); ?>