<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>


      <div class="container">
        <h1>Halaman Berita Nasional</h1>
        <div class="row">
            <?php foreach($nasional as $nsl) :?>
            <div class="col-3">
              <div class="card mb-3">
                <img src="<?= $nsl["poto"];?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"> <?= $nsl["judul"]; ?></p><br>
                  <a href="<?= $nsl["link"]; ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

      <?php require('partials/footer.php'); ?>