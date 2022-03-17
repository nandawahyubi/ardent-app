@extends('layouts.default')

@section('content')
    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story text-uppercase">
                                Become More Carring
                            </p>
                            <h1 class="header">
                                Start Carring Your Car <br> With Ardent
                            </h1>
                            <p class="support">
                                Our car salon will really help your car <br> to keep it looking good and attractive.
                            </p>
                            <p class="cta">
                                <a href="#service" class="btn btn-master btn-warning">
                                    Get Started
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 align-self-center d-none d-sm-none d-md-none d-lg-block">
                            <img src="{{ asset('img/full-service.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sponsor">
        <div class="container d-none d-md-block d-lg-block d-xl-block pb-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                    <img src="{{ asset('img/sponsor/3m-autofilm.png') }}" alt="" class="w-100">
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/sponsor/iceberg-window-films.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/sponsor/solar-gard-premium.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/sponsor/orpro-window-film.png') }}" alt="" class="w-100">
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/sponsor/vgard.png') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about" style="background: #F6F6F6;">
        <div class="container pt-3">
            <h1 class="mb-3">ardent auto detailing</h1>
        </div>
        <div class="parent">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <p>Ardent Auto Detailing adalah workshop otomotif di kota Medan yang khusus melakukan makeover dan
                            salon mobil melalui teknologi Nano Ceramic dan turunannya.
                        </p>
                        <p class="py-2 mb-0">
                            Adapun jasa - jasa yang kami tawarkan yakni :
                        </p>
                        <ul class="pl-3">
                            <li>
                                <strong>
                                    Paket full detailing & coating treatment untuk mobil, motor, sepeda dan sejenisnya.
                                </strong>
                                <ol class="pl-4">
                                    <li>Paket Signature Nano Ceramic Coating</li>
                                    <li>Paket Signature Nano Glass - Based Coating</li>
                                    <li>Paket Signature Nano Diamond Coating</li>
                                </ol>
                            </li>
                            <li>
                                <strong>
                                    Paket salon dan detailing :
                                </strong>
                                <ol class="pl-4">
                                    <li>Premium Wash</li>
                                    <li>
                                        <ul style="list-style-type: disc; padding-left: 20px;">
                                            <li>Exterior Detailing (cuci jamur body, kaca & dekontaminasi kimia)</li>
                                            <li>Interior Detailing</li>
                                            <li>Machine Bay Detailing</li>
                                        </ul>
                                    </li>
                                    <li>Car Fogging</li>
                                    <li>Cuci Uap</li>
                                    <li>Car Coating Maintenance</li>
                                </ol>
                            </li>
                            <li>
                                <strong>
                                    Berbagai macam aksesoris mobil : Kaca film, Alas dasar, Jok mobil, PPF, dll.
                                </strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 d-none d-sm-none d-md-none d-lg-block">
                        <img src="{{ asset('img/about.png') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why">
        <div class=" container-fluid">
            <div class="container py-5">
                <div class="row text-center py-4">
                    <h1>Why Ardent Auto Detailing ?</h1>
                </div>
                <div class="parent row text-center">
                    <div class="icon col-sm-6 col-md-4 col-lg-4">
                        <img src="{{ asset('img/icon/special.png') }}" alt="">
                        <span>
                            Specialis dibidang salon mobil, nano ceramic coating dan PPF sehingga hasil kerja lebih
                            terjamin
                        </span>
                    </div>
                    <div class="icon col-sm-6 col-md-4 col-lg-4">
                        <img src="{{ asset('img/icon/professional.png') }}" alt="">
                        <span>
                            Tim kerja yang berpengalaman lebih dari 10 tahun dibidangnya
                        </span>
                    </div>
                    <div class="icon col-sm-6 col-md-4 col-lg-4">
                        <img src="{{ asset('img/icon/warranty.png') }}" alt="">
                        <span>
                            Berani memberikan garansi hasil kerja
                        </span>
                    </div>
                    <div class="icon col-sm-6 col-md-4 col-lg-4">
                        <img src="{{ asset('img/icon/certificate.png') }}" alt="">
                        <span>
                            Satu-satunya workshop detailing yang bersertifikat resmi dengan menggunakan obat dari supplier
                            resmi yang berkualitas
                        </span>
                    </div>
                    <div class="icon col-sm-6 col-md-4 col-lg-4">
                        <img src="{{ asset('img/icon/quality-control.png') }}" alt="">
                        <span>
                            Step pengerjaan mobil memiliki SOP yang baku (3-4 hari kerja) dan memiliki quality control yang
                            baik
                        </span>
                    </div>
                    <div class="icon col-sm-6 col-md-4 col-lg-4">
                        <img src="{{ asset('img/icon/customer.png') }}" alt="">
                        <span>
                            Memiliki banyak customer yang puas atas hasil kerja kami dan menjadi pelanggan tetap
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process" style="background: #F6F6F6;">
        <div class="container">
            <h1 class="text-center p-3">
                <span class="text-warning">Proses</span> Pengerjaan <br> Nano Ceramic Coating Full Treatment
            </h1>
            <div class="row text-center">
                <h2>Day 1</h2>
            </div>
            <div class="row p-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img src="{{ asset('img/dayone-1.jpg') }}" alt="" class="rounded-3 shadow">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 align-self-center text-center">
                    <ul class="pt-3 pb-2">
                        <li>
                            <i class="far fa-check-circle"></i> Premium Wash
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i> Chemical decontamination on body, glass, wheels, dan
                            celah-celah
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i> Engine detailing
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img src="{{ asset('img/dayone-2.jpg') }}" alt="" class="rounded-3 shadow">
                </div>
            </div>
            <div class="row text-center">
                <h2>Day 2</h2>
            </div>
            <div class="row p-3">
                <div class="col-md-4">
                    <img src="{{ asset('img/daytwo-1.jpg') }}" alt="" class="rounded-3 shadow">
                </div>
                <div class="col-md-4 align-self-center text-center">
                    <ul class="pt-3 pb-2">
                        <li><i class="far fa-check-circle"></i> Interior detailing
                        </li>
                        <li><i class="far fa-check-circle"></i> Paint correction 2-4 steps
                        </li>
                        <li><i class="far fa-check-circle"></i> Preparing for coating
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/daytwo-2.jpeg') }}" alt="" class="rounded-3 shadow">
                </div>
            </div>
            <div class="row text-center">
                <h2>Day 3</h2>
            </div>
            <div class="row p-3">
                <div class="col-md-4">
                    <img src="{{ asset('img/daythree-1.jpg') }}" alt="" class="rounded-3 shadow">
                </div>
                <div class="col-md-4 align-self-center text-center">
                    <ul class="pt-3 pb-2">
                        <li>
                            <i class="far fa-check-circle"></i> Application of Nano Ceramic Coating <br> triple layers
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i> Buffing
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i> Curing Booster application
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i> Finishing
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/daythree-2.jpeg') }}" alt="" class="rounded-3 shadow">
                </div>
            </div>
            <div class="row text-center">
                <h2>Day 4</h2>
            </div>
            <div class="row pb-3 px-3 d-flex justify-content-center flex-column">
                <div class="col-md-4 align-self-center text-center">
                    <ul class="py-2 px-0">
                        <li>
                            <i class="far fa-check-circle"></i> Delivery to customer
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 align-self-center pb-3">
                    <img src="{{ asset('img/delivery-to-customer.jpg') }}" alt="" class="w-100 rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container-fluid px-4">
            <div class="container">
                <div class="row mr-0 ml-0 text-center pb-4">
                    <div class="col-md">
                        <h1><span class="text-warning">Hasil</span> Yang Didapatkan</h1>
                    </div>
                </div>
                <div class="row mr-0 ml-0">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                            href="{{ asset('img/gallery/kuning-layout.jpg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/kuning.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                            href="{{ asset('img/gallery/kuning1-layout.jpg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/kuning1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                            href="{{ asset('img/gallery/kuning2-layout.jpg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/kuning2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                            href="{{ asset('img/gallery/kuning3-layout.jpg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/kuning3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset('img/gallery/mesin.jpeg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/mesin-kecil.jpeg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset('img/gallery/bangku.jpeg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/bangku-kecil.jpeg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset('img/gallery/interior.jpeg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/interior-kecil.jpeg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset('img/gallery/logo.jpeg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/logo-kecil.jpeg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                            href="{{ asset('img/gallery/lampu-layout.png') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/lampu.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset('img/gallery/kaca.jpeg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/kaca-kecil.jpeg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                            href="{{ asset('img/gallery/Pintu-layout.png') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/Pintu.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 px-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset('img/gallery/rem.jpeg') }}">
                            <img class="portfolio py-0" src="{{ asset('img/gallery/rem-kecil.jpeg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="product" style="background: #F6F6F6;">
        <div class="container-fluid pt-4 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md text-center">
                        <h1><span class="text-warning">Aksesoris</span> Mobil</h1>
                        <p class="text-center">
                            Berbagai macam aksesoris mobil yang dapat anda beli di toko kami
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="pembungkus col-md-10 col-lg-8">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Kain Microfiber
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body text-center">
                                        <img class="my-3 rounded shadow" src="{{ asset('img/kain-microfiber.jpg') }}">
                                        <p class="isi text-center pr-5 pl-5">Kami menawarkan kain microfiber sebagai alat
                                            untuk mengelap dan membersihkan mobil anda. Dengan kualitas superior, tanpa
                                            garis pinggir, 40x lebih halus dari pada wol & 100x lebih halus <br> dari pada
                                            rambut manusia. Tingkat penyerapannya juga 7x lebih menyerap air dari pada kain
                                            biasa. Cepat kering & meminimalisir timbulnya bercak air yang membekas atau
                                            membentuk jamur <br> pada body mobil. Pemakaian Kain mocrofiber juga lebih awet,
                                            tidak menyimpan pasir, debu dan kotoran sehingga tidak akan menyebabkan baret.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Alas Kaki
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body text-center">
                                        <img class="my-3 rounded shadow" src="{{ asset('img/alas-kaki.jpg') }}">
                                        <p class="isi text-center pr-5 pl-5">Kami menyediakan alas kaki dari brand ternama
                                            seperti : <br> Trapo, Comfort & D'luxe yang kualitasnya tak usah di ragukan lagi
                                            <br> dan sudah menjadi favorite & pilihan terbaik untuk alas kaki para carholic.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Kaca Film
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body text-center">
                                        <img class="my-3 rounded shadow" src="{{ asset('img/kaca-film.jpg') }}">
                                        <p class="isi text-center pr-5 pl-5">Kaca film yang kami tawarkan juga beragam dan
                                            ternama seperti : <br> Orpro Window Film, V-Gard, 3M Autofilm, Wincos Automotive
                                            Films, Iceberg Window Films, <br> Solar Black Window Films, Solar Gard Premium,
                                            Solar Gard Window Films <br> dengan proses pemasangannya yang detail, teliti dan
                                            rapi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFour">
                                        Jok Mobil
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body text-center">
                                        <img class="my-3 rounded shadow" src="{{ asset('img/jok-mobil.jpg') }}">
                                        <p class="isi text-center pr-5 pl-5">Jok mobil yang kami tawarkan terbuat dari
                                            kulit sintetis dengan kualitas terbaik, <br> tekstur yang sangat halus, sehingga
                                            lebih mudah di bersihkan, <br> lebih awet dan lebih kuat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="service">
        <div class="service-1 container-fluid">
            <div class="service-2 container">
                <div class="row justify-content-center">
                    <div class="col-md text-center">
                        <h1 class="service">
                            Pilihan <span style="color: orange;">Harga Paket</span> Di Salon Mobil Kami
                        </h1>
                        <p class="text-center">Pilihan terbaik untuk anda yang membutuhkan layanan salon mobil dengan
                            cepat <br> dengan hasil yang memuaskan
                        </p>
                    </div>
                </div>
                <div class="row m-4 justify-content-center">
                    <div class="col-md-6 col-lg mb-5">
                        <div class="card-service card">
                            <div class="card-body">
                                <p class="fw-bold text-center">
                                    Paket Signature Nano Ceramic Coating by Crystal Shield
                                </p>
                                <div class="row text-center">
                                    <div class="col-4 col-md-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-success border-3 px-1">Small</span>
                                        <h6>Rp 2.999.000</h6>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-warning border-3 px-1">Medium</span>
                                        <h6>Rp 3.499.000</h6>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-danger border-3 px-1">Large</span>
                                        <h6>Rp 3.999.000</h6>
                                    </div>
                                </div>
                                <ol class="list-group list-group-flush list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Ketahanan Coating 3 Year, 1 Year Warranty
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Fitur Coating Glossy, Warna Lebih Terangkat & Hydrophobic
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Area coating : Semua Bagian Exterior
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Detailing Exterior & Paint Correction 3 steps
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Interior & Machine Bay Detailing
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Finishing
                                        </div>
                                    </li>
                                </ol>
                                <div class="row justify-content-center my-3">
                                    <a href="{{ route('checkout.create', 'signature-nano-ceramic-coating') }}"
                                        class="btn btn-warning rounded-pill text-light w-75">
                                        choose this package
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg mb-5">
                        <div class="card-service card">
                            <div class="card-body">
                                <p class="fw-bold text-center">
                                    Paket Signature Nano Crystal Based Coating by Crystal Shield
                                </p>
                                <div class="row text-center">
                                    <div class="col-4 col-md-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-success border-3 px-1">Small</span>
                                        <h6>Rp 4.499.000</h6>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-warning border-3 px-1">Medium</span>
                                        <h6>Rp 4.999.000</h6>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-danger border-3 px-1">Large</span>
                                        <h6>Rp 5.499.000</h6>
                                    </div>
                                </div>
                                <ol class="list-group list-group-flush list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Ketahanan Coating 5 Year, 3 Year Warranty
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Fitur Coating Super Glossy (Seperti Kaca) & Hydrophobic
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Area coating : Semua Bagian Exterior & Bagian Interior Yang Berbahan Kulit
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Detailing Exterior & Paint Correction 3 steps
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Interior & Machine Bay Detailing
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Finishing
                                        </div>
                                    </li>
                                </ol>
                                <div class="row justify-content-center my-3">
                                    <a href="{{ route('checkout.create', 'signature-nano-crystal-based-coating') }}"
                                        class="btn btn-warning rounded-pill text-light w-75">
                                        choose this package
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg mb-5">
                        <div class="card-service card border border-warning border-4">
                            <div class="card-body">
                                <p class="fw-bold text-center">
                                    Paket Signature Diamond Coating by Crystal Shield
                                </p>
                                <div class="row text-center">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-success border-3 px-1">Small</span>
                                        <h6>Rp 5.999.000</h6>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-warning border-3 px-1">Medium</span>
                                        <h6>Rp 6.999.000</h6>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <span
                                            class="vehicle-size border border-end-0 border-top-0 border-danger border-3 px-1">Large</span>
                                        <h6>Rp 7.999.000</h6>
                                    </div>
                                </div>
                                <ol class="list-group list-group-flush list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Ketahanan Coating 5 Year, 3 Year Warranty
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Fitur Coating Warna Cat Terlihat Basah (Wetlook), Glossy, Deep & Hydrophobic
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Area coating : Semua Bagian Exterior & Bagian Interior Yang Berbahan Kulit
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Detailing Exterior & Paint Correction 3 steps
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Interior & Machine Bay Detailing
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            Finishing
                                        </div>
                                    </li>
                                </ol>
                                <div class="row justify-content-center my-3">
                                    <a href="{{ route('checkout.create', 'signature-diamond-coating') }}"
                                        class="btn btn-warning rounded-pill text-light w-75">
                                        choose this package
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center mb-5">
                    <div class="col-sm col-md col-lg-8 col-xl-8 px-5">
                        <div class="alert alert-light bg-light mb-0 shadow" role="alert">
                            <h4 class="alert-heading text-center note" style="color: black;">
                                Keterangan
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-5">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th>Small</th>
                                            <td colspan="2">Agya, Jazz, Yaris,
                                                Brio, dll</td>
                                        </tr>
                                        <tr>
                                            <th>Medium</th>
                                            <td colspan="2">CRV, HRV, Innova, Rush, Almaz, dll</td>
                                        </tr>
                                        <tr>
                                            <th>Large</th>
                                            <td colspan="2">Fortuner, Pajero, Alphard, LC, dll</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-start lh-lg list-unstyled">
                                        <li class="fw-bold text-dark">Semua paket diatas sudah termasuk : </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Premium wash
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Chemical Decontamination
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Exterior detailing
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Interior detailing
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Machine bay detailing
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Paint correction
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Coating Nano Ceramic 3 layer
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/ic_check.svg') }}"> Finishing
                                        </li>
                                        <li class="fw-bold text-dark">
                                            Proses 3 - 4 hari kerja
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <div class="container pb-5">
            <div class="row pb-3">
                <div class="col-md">
                    <h2 class="text-secondary fw-bold text-center">
                        Pertanyaan Yang Sering Diajukan
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-7 px-5">
                    <button class="accordion-btn">
                        Apa poin penting keunggulan coating ?
                    </button>
                    <div class="panel">
                        <p class="text-start">
                            - Cat mobil menjadi kilat untuk jangka waktu yang lama <br>
                            - Mobil putih tidak menguning dan mobil hitam tetap berkilau <br>
                            - Melindungi dari baret halus sehingga cat mobil tetap awet <br>
                            - Melindungi dari hujan asam, kotoran burung dan getah pohon <br>
                            - Memberikan efek daun talas pada cat mobil dan kaca sehingga lebih tahan kotor <br>
                            - Cat terlihat basah, kilat, tebal dan baru.
                        </p>
                    </div>
                    <button class="accordion-btn">
                        Kenapa harus memilih coating? Apa bedanya dengan wax ?
                    </button>
                    <div class="panel">
                        <p class="text-justify">
                            Wax juga merupakan salah satu proses mengangkat warna cat mobil agar
                            kembali terlihat cerah dan kontras. Namun coating adalah paket yang lebih komplit dari pada wax
                            dengan tingkat ketahanan yang jauh lebih lama dari pada wax. Jika sekali wax mungkin warna pada
                            cat mobil hanya akan terlihat cerah dalam hitungan bulan, coating akan membuat warna cat mobil
                            anda terlihat lebih cerah dalam hitungan tahunan. Sehingga akan lebih menghemat biaya perawatan,
                            mobil akan terlihat bagus & menarik untuk waktu yang lama.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block d-lg-block">
                    <img src="{{ asset('img/questions.png') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="container-fluid p-0">
            <div class="embed-responsive embed-responsive-21by9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d512.3092719250042!2d98.70617115222647!3d3.633402304066747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMzgnMDAuNCJOIDk4wrA0MicyMi43IkU!5e0!3m2!1sid!2sid!4v1627363217834!5m2!1sid!2sid"
                    class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container-fluid">
            <div class="footer-parent p-4">
                <div class="row">
                    <div class="col align-">
                        <a class="logo-footer" href="{{ route('welcome') }}">
                            <img src="{{ asset('img/logo-navbar.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <div class="footer-child">
                            {{-- <p class="text-light mb-0">Ardent Auto Detailing adalah workshop otomotif</p> --}}
                            <p class="text-light mb-0">Workshop otomotif yang berlokasikan <br> di komplek Cemara Asri Jl.
                                Boulevard Timur No. 88G</p>
                            {{-- <p class="text-light mb-0">Cemara Asri Jl. Boulevard Timur No. 88G</p> --}}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-child text-end d-flex flex-column">
                            <span class="text-light">Customer Service</span>
                            <span class="text-success">
                                <i class="fa-solid fa-phone"></i> 0811 6150 309
                            </span>
                            <span class="text-success">
                                <i class="fa-brands fa-whatsapp"></i> 0811 6150 309
                            </span>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-square fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram-square fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube-square fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-square-envelope fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="text-white text-center my-2">Copyright © {{ date('Y') }} | Nanda Wahyubi</p>
                </div>
            </div>
        </div>
    </section>
@endsection
