<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- badan -->
<div class="row g-0 pt-5 badan">

    <?= $this->include('admin/bar'); ?>
    <!-- content -->
    <div class="col-md-10 p-5">
        <h3><i class="bi bi-file-earmark-bar-graph me"></i> Soal Test</h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <!-- akhir kontent -->

    </div>
    <!-- akhir badan -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?= $label; ?>,
                datasets: [{
                    label: 'Jumlah Benar',
                    data: <?= $benar; ?>,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        // ticks: {
                        //     stepSize: 1
                        // }
                    },
                }
            }
        });
    </script>
    <?= $this->endSection(); ?>