<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">HOT NEWS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?= checkActive('index.php'); ?>" aria-current="page" href="index.php">Home</a>
        <a class="nav-link <?= checkActive('internasional.php'); ?>" href="internasional.php">Internasional</a>
        <a class="nav-link <?= checkActive('nasional.php'); ?>" href="nasional.php">Nasional</a>
        <a class="nav-link <?= checkActive('olahraga.php'); ?>" href="olahraga.php">Olahraga</a>
        <a class="nav-link <?= checkActive('otomotif.php'); ?>" href="otomotif.php">Otomotif</a>
        <a class="nav-link <?= checkActive('esports.php'); ?>" href="esports.php">Esports</a>
        <!-- <a class="nav-link disabled">Disabled</a> -->
      </div>
    </div>

    <?php if (isset($_SESSION['id_user'])) :  ?>
      <?php if ($_SESSION['level'] == 'admin') : ?>
        <a href="page/admin-page.php" class="btn btn-primary ms-2">Profile</a>
      <?php else : ?>
        <a href="page/user-page.php" class="btn btn-primary ms-2">Profile</a>
      <?php endif; ?>
    <?php else : ?>
      <a href="login.php" class="btn btn-primary ms-2">Login</a>
    <?php endif; ?>

  </div>
</nav>