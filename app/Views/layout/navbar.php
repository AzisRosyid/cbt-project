<?php if ($section == 'home') : ?>
    <nav class="navbar navbar-expand-lg bg-transparent pt-4 pe-3 position-fixed">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active tombol" aria-current="page" href="#home">Home</a>
                    <a class="nav-link active tombol" aria-current="page" href="#about">About</a>
                    <a class="nav-link active tombol" aria-current="page" href="#guide">Guide</a>
                    <a class="nav-link active tombol" aria-current="page" href="<?= base_url('login'); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>
<?php endif; ?>