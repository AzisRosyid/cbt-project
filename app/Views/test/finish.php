<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid halang position-absolute bottom-0 top-0 start-0 end-0 position-fixed">
    <div class="row justify-content-center">
        <div class="col-3 bg-white text-center habis py-4 rounded-3 position-fixed">
            <p><?= $message; ?></p>
            <a href="<?= base_url($url.'/result'); ?>" class="btn btn-primary tidak">Lihat Hasil</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>