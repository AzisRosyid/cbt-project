<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <!-- badan -->
    <div class="row g-0 pt-5 badan">

    <?= $this->include('admin/bar'); ?>

<!-- content -->
<div class="col-md-10 p-5">
        <div class="row">
          <div class="col-12">
            <h3><i class="bi bi-speedometer2 me"></i> Dashboard</h3><hr>
            <div class="row">
              <div class="card bg-success text-white marcad" style="width: 18rem;">
                <div class="card-body">
                  <div class="body-icon">
                    <i class="bi bi-person-vcard mr-2 boco"></i>
                  </div>
                  <h5 class="card-title">Jumlah Siswa</h5>
                  <div class="display-4 fw-bold"><?= $siswa; ?></div>
                  <a href="siswa.html" class=" text-white"><p class="card-text">Lihat Detail</p></a>
                </div>
              </div>

              <div class="card bg-warning text-white marcad" style="width: 18rem;">
                <div class="card-body">
                  <div class="body-icon">
                    <i class="bi bi-file-earmark-bar-graph mr-2 boco"></i>
                  </div>
                  <h5 class="card-title">Jumlah Soal</h5>
                  <div class="display-4 fw-bold"><?= $soal; ?></div>
                  <a href="soal.html" class=" text-white"><p class="card-text">Lihat Detail</p></a>
                </div>
              </div>

              <div class="card bg-danger text-white marcad" style="width: 18rem;">
                <div class="card-body">
                  <div class="body-icon">
                    <i class="bi bi-file-earmark-fill mr-2 boco"></i>
                  </div>
                  <h5 class="card-title">Jumlah Hasil</h5>
                  <div class="display-4 fw-bold"><?= $hasil; ?></div>
                  <a href="hasil.html" class=" text-white"><p class="card-text">Lihat Detail</p></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            
          </div>
        </div>
      </div>
      <!-- akhir kontent -->



    </div>
    <!-- akhir badan -->
<?= $this->endSection(); ?>