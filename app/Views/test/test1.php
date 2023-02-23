<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-between pt-5">
        <div class="col-lg-6 text-white">
            <h1>Hai, <?= $nama; ?></h1>
            <p>SELAMAT DATANG DI EMPATITUDE-CBT</p>
        </div>
        <div class="col-lg-2 text-end">
            <div class="date rounded-2 text-center">
                <p><?= $date; ?></p>
            </div>
            <div class="date rounded-2 text-center">
                <p id="kodomo"><?= $time; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 text-end">
            <div class="date rounded-2 text-center">
                <p><?php $date ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 bg-white rounded-2">
            <div class="row px-2 py-2 border-bottom border-secondary border-2">
                <div class="waktu bg-dark text-white text-center">
                    <p id="demo"><?= $time; ?></p>
                </div>
            </div>
            <div class="row text-center position-relative mb-4">
                <p>question</p>
                <h5 class="position-absolute mt-4"><?= $no.'/'.count($colors); ?></h5>
            </div>
            <div class="row g-2 border-top border-secondary border-2">
                <?php foreach($colors as $i=>$st) : ?>
                <div class="col-lg-2">
                    <a href="<?= base_url($url.'/'.($i+1)); ?>" class="aicon ">
                        <div class="icon bg-secondary text-center rounded-2 text-white <?= $st; ?>">
                            <p><?= $i + 1; ?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-lg-7 offset-lg-1">
            <div class="row position-relative">
                <div class="col-lg-12 position-absolute">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 1</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="tombol text-end">
                                <a href="#" class="btn btn-primary">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 2</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 3</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 4</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 5</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 6</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 7</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 8</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 9</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 10</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 11</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 12</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 13</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 14</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 15</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 16</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 17</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 18</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 19</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 20</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 21</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 22</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 23</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 24</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 25</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 26</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 27</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 28</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 29</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 30</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 31</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 32</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 33</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 34</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 35</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 36</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 37</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 38</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 39</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 40</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 41</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 42</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 43</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 44</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 45</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 46</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 47</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 48</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 49</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 position-absolute hilang">
                    <div class="card" style="width: 100%;">
                        <h5 align="center" class="mt-3">Soal 50</h5>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-body text-center">
                            <p class="card-text" align="center">Apakah kamu yakin untuk menyimpan <br>
                                jawaban dan mengakhiri penilaian dalam <br>
                                Emaptitude-CBT ?</p>
                            <a href="#" class="btn btn-primary">Ya</a>
                            <a href="#" class="btn btn-primary">Tidak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>