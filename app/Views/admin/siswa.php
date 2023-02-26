<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <!-- badan -->
    <div class="row g-0 pt-5 badan">

    <?= $this->include('admin/bar'); ?>
<!-- content -->
<div class="col-md-10 p-5">
              <h3><i class="bi bi-person-vcard me"></i> Daftar Siswa</h3><hr>
        <div class="row">

          <div class="col-12">
            
          </div>
        </div>

        <div class="col-12">
        <!-- daftar siswa -->
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">NIP/NISN</th>
            <th scope="col">Asal Sekolah</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach($siswa as $i => $st) : ?>
          <tr>
            <th scope="row"><?= $i + 1; ?></th>
            <td><?= $st['nama']; ?></td>
            <td><?= $st['nip_nisn']; ?></td>
            <td><?= $st['sekolah']; ?></td>
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