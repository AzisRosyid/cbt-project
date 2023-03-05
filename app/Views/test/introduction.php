<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid">
  <div class="row justify-content-end pe-5 position-relative">
    <div class="col-lg-6 gmatematika">

    </div>
    <div class="col-lg-6 bg ps-5 my-5 position-relative">
      <div class="row wadah justify-content-end">
        <div class="lingkaran rounded-circle"></div>
        <div class="lingkaran rounded-circle"></div>
        <div class="lingkaran rounded-circle"></div>
        <div class="lingkaran rounded-circle"></div>
      </div>
      <h1 class="judul fst-italic text-white fw-bold">INSTRUKSI <br>
        PENGERJAAN TES <br>
        BAKAT MATEMATIKA
      </h1>
      <div class="row position-relative">
        <div class="col-lg-8 position-absolute page1 page">
          <p align="center" class="text-white mt-5 paragraf fw-lighter">Terdapat beberapa pertanyaan terkait <br>
            bidang matematika yang harus kamu <br>
            selesaikan untuk menentukan <br>
            kemampuan potensial yang kamu <br>
            miliki berdasarkan kemampuan yang <br>
            telah kamu tunjukkan.</p>
        </div>
        <div class="col-lg-8 position-absolute page2 page hilang">
          <p align="center" class="text-white mt-5 paragraf fw-lighter">Temukan posisi duduk ternyamanmu <br>
            dan pastikan bahwa kamu sedang <br>
            tidak ada kegiatan lain saat menjawab <br>
            seluruh pertanyaan yang diberikan <br>
            selama proses penilaian berlangsung</p>
        </div>
        <div class="col-lg-8  position-relative page3 page hilang">
          <p align="center" class="text-white mt-5 paragraf fw-lighter">Kamu sangat diharapkan untuk dapat <br>
            memberikan jawaban dengan jujur <br>
            dan teliti ya, karena setiap soal tes <br>
            hanya dapat dikerjakan satu kali, tanpa <br>
            ada pengulangan. Jangan sembarang <br>
            mengisi juga ya. <br><br>
            Pengerjaan soal ini tidak <br>
            mempengaruhi penilaian akhir Guru <br>
            terhadap dirimu dalam raport.</p>
        </div>
        <div class="col-lg-8  position-absolute page4 page hilang">
          <p align="center" class="text-white mt-5 paragraf fw-lighter">Tes bakat dapat dikerjakan dalam kurun <br>
            waktu 60menit. Pastikan kamu mampu <br>
            mengerjakan tes ini dalam keadaan <br>
            nyaman dan tenang ya! <br><br>
            Jika instruksi telah dipahami, maka <br>
            silahkan kamu klik tombol "Mulai Tes" <br>
            untuk masuk pada proses penilaian <br>
            Bakat Matematika.
          </p>
        </div>
      </div>

      <div class="row justify-content-center position-relative ps-2 pb-5">
        <div class="col-lg-2 col-md-3 col-sm-3 col-3">
          <a href="" class=" position-absolute panahki2 hilang"><i class="bi bi-caret-left-fill text-white"></i></a>
          <a href="" class=" position-absolute panahki3 hilang"><i class="bi bi-caret-left-fill text-white"></i></a>
        </div>
        <div class="col-lg-4 pt-4 col-md-4 col-sm-6 col-5 row justify-content-center">
          <a href="#" class="btn rounded-5 hilang mulai">MULAI TES</a>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-2 col-3 col-sm-3">
          <a href="#" class=" position-absolute panahka1"><i class="bi bi-caret-right-fill text-white"></i></a>
          <a href="" class=" position-absolute panahka2 hilang"><i class="bi bi-caret-right-fill text-white"></i></a>
          <a href="" class=" position-absolute panahka3 hilang"><i class="bi bi-caret-right-fill text-white"></i></a>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="container-fluid position-fixed top-0 end-0 bottom-0 start-0 winstruksi hilang">
  <div class="row justify-content-center intruksi">
    <div class="col-4 text-center bg-white py-4 rounded-3">
      <p>Ada 40 Butir Soal (Maksimal Pengerjaan 45menit)</p>
      <p>Apakah anda yakin ingin melanjutkan?</p>
      <div class="row">
        <div class="col-6 text-center">
          <form action="<?= base_url('test/start'); ?>" method="post">
            <button type="submit" href="#" class="btn rounded-3">Ya</button>
          </form>
        </div>
        <div class="col-6 text-center">
          <a href="#" class="btn rounded-3 tidak">Tidak</a>
        </div>
      </div>
    </div>
  </div>
</div>

















<?= $this->endSection(); ?>