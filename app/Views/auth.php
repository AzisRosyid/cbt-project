<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- login -->
<section>
  <div class="container position-relative">


    <!-- panel login -->
    <div class="row position-absolute z-1 login">
      <div class="col-md-5 col-lg-4">
        <div class="card rounded-4 shadow pKiri pMuncul">
          <div class="card-body">
            <form>
              <div class="input-group flex-nowrap col-lg-12 mb-4">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autofocus="" required="">
              </div>

              <div class="input-group flex-nowrap col-lg-12 mb-4">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill"></i></span>
                <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" required="" minlength="8">
              </div>

              <div class="form-group col-lg-12 mx-auto mb-0">
                <button class="btn btn-primary btn-block font-weight-bold">
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
                <a href="" class="text-primary ml-2 overlay">Daftar Disini</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-7 pr-lg-7 mb-5 mb-md-0 text-center">
        <div class="card rounded-4 shadow pKanan pMuncul">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir panel login -->



    <!-- panel register -->
    <div class="row position-relative z-0 register">
      <div class="col-md-7 pr-lg-7 mb-5 mb-md-0 text-center">
        <div class="card rounded-4 shadow qKiri">
          <div class="card-body">

          </div>
        </div>
      </div>

      <div class="col-md-5 col-lg-4">
        <div class="card rounded-4 shadow qKanan">
          <div class="card-body">

            <form>
              <div class="input-group flex-nowrap col-lg-12 mb-4">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required="" autofocus="">
              </div>

              <div class="input-group flex-nowrap col-lg-12 mb-4">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill"></i></span>
                <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" required="" autofocus="" minlength="8">
              </div>

              <div class="input-group flex-nowrap col-lg-12 mb-4">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-circle"></i></span>
                <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="addon-wrapping" required="" autofocus="">
              </div>

              <div class="form-group col-lg-12 mx-auto mb-0">

                <button class="btn btn-primary btn-block font-weight-bold">
                  <a href="#" type="submit"></a>
                  Daftar
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
                Sudah memiliki Akun?
                <a href="" class="text-primary ml-2 over">Masuk Disini</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir panel register -->


  </div>
</section>

<!-- akhir login -->
<?= $this->endSection(); ?>