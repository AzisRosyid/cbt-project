<?php if ($section == 'home') : ?>
  <nav class="navbar navbar-expand-lg bg-transparent pt-4 pe-3 position-fixed">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active tombol" aria-current="page" href="#home">Home</a>
          <a class="nav-link active tombol" aria-current="page" href="#about">About</a>
          <a class="nav-link active tombol" aria-current="page" href="#guide">Guide</a>
          <a class="nav-link active tombol" aria-current="page" href="<?= base_url('login'); ?>">Login</a>
        </div>
      </div>
    </div>
  </nav>
<?php elseif ($section == 'admin') : ?>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-primary position-fixed navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="#">ADMIN</a>
      <form class="d-flex ml-auto" role="search" <?php if ($title == 'siswa') : ?> action="<?= base_url('admin/siswa'); ?>" <?php elseif ($title == 'hasil') : ?> action="<?= base_url('admin/hasil') ?>" <?php endif; ?>>
        <?php if ($title == 'siswa' || $title == 'hasil') : ?>
          <input class="form-control me-2" type="search" placeholder="Search" name="search" value="<?= isset($search) ? $search : ''; ?>" aria-label="Search">
          <button class="btn btn-outline-success bg-success text-light cari" type="submit">Search</button>
        <?php endif; ?>
        <a href="<?= base_url('logout'); ?>" class="icolog">
          <i class="bi bi-box-arrow-right"></i>
        </a>
      </form>
    </div>
    </div>
  </nav>
  <!-- akhir navbar -->
<?php endif; ?>