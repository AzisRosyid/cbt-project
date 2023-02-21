<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="continer px-5 py-4">
      <h1 align="center">SELAMAT DATANG DI EMAPTITUDE-CBT</h1>
      <div class="row register mt-3">
        <div class="col-lg-5 text-center px-5 text-white margint">
          <table style="height: 300px;">
            <tbody>
              <tr>
                <td class="align-middle ptd ps-5">Ayo daftar diri kamu sekarang <br>
                juga, Bersama Emaptitude-CBT <br>
                kamu dapat mengetahui bakat <br>
                matematika yang potensial <br>
                dalam dirimu.
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-lg-5 pe-5">
          <form form action="<?= base_url('register'); ?>" method="post">
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" name="nama" autofocus="" required="">
            </div>
            <select class="form-select" aria-label="Default select example" name="sebagai" required="">
              <option value="" disabled selected>Sebagai</option>
              <option value="siswa">Siswa</option>
              <option value="mahasiswa">Mahasiswa</option>
              <option value="orang lain">Orang lain</option>
            </select>
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP/NISN" name="nip_nisn" required="">
            </div>
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Sekolah" name="sekolah" required="">
            </div>
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Provinsi" name="provinsi" required="">
            </div>
            <div class="mb-3 mt-3">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required="">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="" minlength="8">
            </div>
            <select class="form-select" aria-label="Default select example" name="tahu" required="">
              <option value="" disabled selected>Darimana kamu tahu Emaptitude-CBT ?</option>
              <option value="siswa">Siswa</option>
              <option value="mahasiswa">Mahasiswa</option>
              <option value="orang lain">Orang lain</option>
            </select>
            <div class="mb-3 form-check mt-3">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
              <label class="form-check-label text-white" for="exampleCheck1">Dengan membuat akun baru di Emaptitude-CBT, Saya telah menyetujui
              Syarat, Ketentuan, dan Kebijakan Privasi.</label>
            </div>
            <div class="text-end mb-4">
              <button type="submit" class="btn btn-warning">Buat Akun</button>
            </div>
            
          </form>

          <div class="wadah position-absolute z-5">
            <div class="row g-0 me-5 mb-5">
              <div class="col-lg-12 geser">
                <div class="lingkaran1"></div>
                <div class="lingkaran1"></div>
                <div class="lingkaran1"></div>  
                <div class="lingkaran1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection(); ?>