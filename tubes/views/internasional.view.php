<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>


      <div class="container">
        <h1>Halaman Berita Internasional</h1>
        <div class="row">
            <?php foreach($internasional as $intnl) :?>
            <div class="col-3">
              <div class="card mb-3">
                <img src="<?= $intnl["poto"];?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"> <?= $intnl["judul"]; ?></p><br>
                  <a href="<?= $intnl["link"]; ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

      <?php require('partials/footer.php'); ?>