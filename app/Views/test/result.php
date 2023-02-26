<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
      <div class="row pt-5">
        <div class="col-lg-6 text-white">
          <h1>Hai, Nama</h1>
          <p>SELAMAT DATANG DI EMPATITUDE-CBT</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center bg-white mt-3 rounded-3 selamat pt-3">
          <p>Selamat, Kamu telah menyelesaikan pengisian <br>
          <span>Emaptitude-CBT, berikut hasilnya</span></p>
        </div>
        <div class="col-lg-8 text-center bg-white mt-3 rounded-3 pt-3">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center border-bottom">
              <p>Test Result</p>
            </div>
            <div class="col-lg-10 text-center border-bottom">
              <div class="row">
                <div class="col-lg-6">
                  <div>
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
                <div class="col-lg-5 justify-content-center ms-5">
                  <div class="row justify-content-center">
                    <div class="col-lg-12 border-bottom">
                      <p>Score: 30%</p>
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-lg-6">
                      <p>Correct Anwers</p>
                      <p>Wrong Answer</p>
                      <p>Unanswered</p>
                      <p>Skipped</p>
                    </div>
                    <div class="col-lg-6 text-end">
                      <p>30</p>
                      <p>10</p>
                      <p>5</p>
                      <p>5</p>
                    </div>
                  </div>
                
                </div>
              </div>
              
            </div>
            <div class="col-lg-10 text-center border-bottom">
              <div class="row justify-content-center">
                    <div class="col-lg-12">
                      <p>Score by category</p>
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-lg-6">
                      <p>numerical logic 40%</p>
                    </div>
                    <div class="col-lg-6">
                      <p>numerical reasoning 30%</p>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 text-center bg-white mt-3 rounded-3 pt-3 selamat">
          <p>Yeay! Kamu memiliki kecenderungan pada kemampuan <br>
          matematika, kamu termasuk dalam Emaptitude-CBT <br>
          <span>level 3 lho, Tingkatkan kemampuanmu !</span></p>
        </div>
        <div class="row mt-3 mb-3 justify-content-center">
          <div class="col-lg-3">
            <div class="tombol text-center">
               <a href="#" class="btn btn-primary">Download PDF</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const data = {
        labels: [
          'Correct',
          'Wrong',
          'Skipped',
          'Unanswered'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [30, 10, 5, 5],
          backgroundColor: [
            'green',
            'red',
            'grey',
            'skyblue'
          ],
          hoverOffset: 4
        }]
      };

      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
<?= $this->endSection(); ?>