<div class="container">
    <?php if ($section == 'auth') : ?>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h3>Navbar</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Login/Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

    <?php elseif ($section == 'home') : ?>
        <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top px-5 border border-light-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-1 rounded-3">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home/test'); ?>">Test CBT</a>
                        </li>
                        <li class="nav-item mx-1 rounded-3">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home/result'); ?>">Hasil Test</a>
                        </li>
                        <li class="nav-item mx-1 rounded-3 hal1">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home/profile'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</div>