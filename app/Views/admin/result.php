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
            <button type="button" class="btn btn-danger px-2 py-1"><i class="bi bi-filetype-pdf me-2"></i>Unduh</button>
          </div>
        </div>

        <div class="col-12">
        <!-- daftar siswa -->
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Soal 1</th>
            <th scope="col">Soal 2</th>
            <th scope="col">Soal 3</th>
            <th scope="col">Soal 4</th>
            <th scope="col">Soal 5</th>
            <th scope="col">Soal 6</th>
            <th scope="col">Soal 7</th>
            <th scope="col">Soal 8</th>
            <th scope="col">Soal 9</th>
            <th scope="col">Soal 10</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>1A</td>
            <td>0A</td>
            <td>1B</td>
            <td>1D</td>
            <td>0A</td>
            <td>0C</td>
            <td>1B</td>
            <td>1B</td>
            <td>1D</td>
            <td>0A</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>0C</td>
            <td>1B</td>
            <td>1B</td>
            <td>1D</td>
            <td>0A</td>
            <td>1A</td>
            <td>0A</td>
            <td>1B</td>
            <td>1D</td>
            <td>0A</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>0D</td>
            <td>0C</td>
            <td>1B</td>
            <td>1D</td>
            <td>0A</td>
            <td>0C</td>
            <td>1B</td>
            <td>1B</td>
            <td>1D</td>
            <td>0A</td>
          </tr>
        </tbody>
      </table>
      <!-- akhir daftar siswa -->
      </div>
      </div>
      <!-- akhir kontent -->



    </div>
    <!-- akhir badan -->
<?= $this->endSection(); ?>