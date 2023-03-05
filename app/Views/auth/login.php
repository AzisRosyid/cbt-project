<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- login -->
<div class="continer-fluid flow position-relative">
  <!-- <div class="row g-0 mt-0 ms-5 mt-5">
        <div class="col-lg-3">
          <div class="lingkaran"></div>
          <div class="lingkaran"></div>
          <div class="lingkaran"></div>  
          <div class="lingkaran"></div>
        </div>
      </div> -->
  <div class="row">
    <div class="col-12 col-lg-4 col-md-4 col-sm-12 z-2 bg-transparent">
      <div class="row g-0 mt-0 ms-5 mt-5">
        <div class="col-lg-12">
          <div class="lingkaran"></div>
          <div class="lingkaran"></div>
          <div class="lingkaran"></div>
          <div class="lingkaran"></div>
        </div>
      </div>
      <div class="row g-0 mt-0 ms-5 mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="com">Computer Based Test <br>
            Mathematics Aptitude Test <br>
            For Junior High School Student</p>
          <br><br>
          <h1 class="textl">LOGIN</h1>
        </div>
      </div>

      <!-- panel login -->
      <div class="row g-0 ms-5">
        <div class="col-md-5 col-lg-4">
          <div class="card rounded-4 shadow plogin">
            <div class="card-body">
              <form action="<?= base_url('login'); ?>" method="post">
                <div class="input-group flex-nowrap col-lg-12 mb-4">
                  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
                  <input type="text" class="form-control" placeholder="NIP/NISN" aria-label="Username" aria-describedby="addon-wrapping" autofocus="" required="" name="nip_nisn">
                </div>

                <div class="input-group flex-nowrap col-lg-12 mb-4">
                  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill"></i></span>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" required="" minlength="8" name="password">
                </div>

                <div class="form-group col-lg-12 mx-auto mb-0">
                  <button class="btn btn-primary btn-block font-weight-bold masuk">
                    <a href=""></a>
                    Masuk
                  </button>
                </div>
              </form>

              <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                <div class="border-bottom w-100 ml-5"></div>
                <span class="px-2 small text-muted fw-bold text-muted">atau</span>
                <div class="border-bottom w-100 ml-5"></div>
              </div>

              <div class="text-center w-100">
                <p class="text-muted fw-bold text-white">
                  Belum memiliki Akun?
                  <a href="<?= base_url('register'); ?>" class="text-primary ml-2 rounded-2 bgdaf">Daftar Disini</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir panel login -->

      <div class="wadah position-relative z-5">
        <div class="row g-0 me-5 mb-5">
          <div class="col-lg-6 geser">
            <div class="lingkaran1"></div>
            <div class="lingkaran1"></div>
            <div class="lingkaran1"></div>
            <div class="lingkaran1"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-8 col-md-9 col-lg-8 position-relative overflow-hidden z-0">
      <div class="rounded-circle ling1"></div>
      <div class="rounded-circle ling2"></div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>