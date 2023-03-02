<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <!-- badan -->
    <div class="row g-0 pt-5 badan">

    <?= $this->include('admin/bar'); ?>
      
<!-- content -->
<div class="col-md-10 p-5">
        <h3><i class="bi bi-file-earmark-fill filesiswa"></i> Hasil Test</h3><hr>
        <div class="row mb-2">
          <div class="col-12 text-end">
            <form action="<?= $url; ?>" method="post">
            <button type="submit" class="btn btn-danger px-2 py-1"><i class="bi bi-filetype-pdf me-2"></i>Unduh</button>
            </form>
          </div>
        </div>

        <div class="col-12">
        <!-- daftar siswa -->
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <?php foreach ($label as $st) : ?>
              <th scope="col"><?= $st; ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach ($hasil as $i=>$st) : ?>
            <tr>
              <th scope="row"><?= $i+1; ?></th>
              <?php foreach ($st as $s) : ?>
                <td><?= $s; ?></td>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- akhir daftar siswa -->
      </div>
      </div>
      <!-- akhir kontent -->



    </div>
    <!-- akhir badan -->
<?= $this->endSection(); ?>