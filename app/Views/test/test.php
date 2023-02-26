<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container wadahsoal">
  <div class="row justify-content-between pt-5">
    <div class="col-6 text-white">
      <h1>Hai, <?= $nama; ?></h1>
      <p>SELAMAT DATANG DI EMPATITUDE-CBT</p>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-4 text-end">
      <div class="date rounded-2 text-center">
        <p><?= $date; ?></p>
      </div>
      <div class="date rounded-2 text-center">
        <p id="kodomo"><?= $time; ?></p>
      </div>
    </div>
  </div>
  <form action="<?= base_url($url . '/' . $no); ?>" method="post" id="mefo">
  <div class="row">
    <div class="col-lg-2 col-md-4 col-sm-2 col-2 offset-lg-0 offset-md-0 bg-white rounded-2 mb-4 barsoal">
      <div class="row px-2 py-2 border-bottom border-secondary border-2">
        <div class="waktu bg-dark text-white text-center">
          <p id="demo" class="mb-2 mt-2"><?= $time; ?></p>
        </div>
      </div>
      <div class="row text-center position-relative mb-4">
        <p>question</p>
        <h5 class="position-absolute mt-4"><?= $no . '/' . count($colors); ?></h5>
      </div>
        <div class="row g-2 border-top border-secondary border-2">
          <?php foreach ($colors as $i => $st) : ?>
            <div class="col-6 col-md-2 col-lg-2 col-sm-6">
              <button type="submit" name="button" value="<?= $i + 1; ?>" href="<?= base_url($url . '/' . ($i + 1)); ?>" class="aicon nomor5 icon bg-secondary text-center rounded-2 text-white <?= $st; ?>">
                <p><?= $i + 1; ?></p>
              </button>
            </div>
          <?php endforeach; ?>
        </div>
    </div>

    <div class="col-10 col-sm-10 col-lg-7 col-md-8 offset-lg-1">
      <div class="row position-relative justify-content-center">
        <div class="col-12 position-absolute">
          <div class="card" style="width: 100%;">
            <h5 align="center" class="mt-3">Soal <?= $no; ?></h5>
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"><?= $soal['content']; ?></p>
              <?php if (isset($opsi)) : ?>
                <?php foreach ($opsi as $i => $st) : ?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="<?= $i + 1; ?>" id="flexRadioDefault<?= $i; ?>" <?= $jawab['option_id'] == $st['id'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="flexRadioDefault<?= $i; ?>">
                      <?= ($st['option'] . ". " . $st['content']); ?>
                    </label>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <div class="row tombol">
                <div class="col-6">
                  <a class="btn btn-white text-primary clear">Clear</a>
                </div>
                <div class="col-6 text-end">
                  <button type="submit" name="button" value="submit" class="btn btn-primary">Submit</button>
                  <?php if (count($colors) == $no) : ?>
                    <a href="#" class="btn btn-primary selesai">Selesai</a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-8 col-9 hilang rampung mt-5 position-fixed">
          <div class="card shadow-lg" style="width: 100%;">
            <div class="card-body text-center">
              <p class="card-text" align="center">Apakah kamu yakin untuk menyimpan <br>
                jawaban dan mengakhiri penilaian dalam <br>
                Emaptitude-CBT ?</p>
              <a href="#" class="btn btn-primary">Ya</a>
              <a href="#" class="btn btn-primary tidak">Tidak</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="container-fluid halang position-absolute bottom-0 top-0 start-0 end-0 hilang position-fixed">
  <div class="row justify-content-center">
    <div class="col-3 bg-white text-center habis py-4 rounded-3 position-fixed">
      <p>Waktu Habis!</p>
      <a href="#" class="btn btn-primary tidak">Lihat Hasil</a>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>