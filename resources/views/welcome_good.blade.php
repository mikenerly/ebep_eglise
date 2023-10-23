<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eglise Baptiste de Petion-Ville</title>

    <!--CSS link local -->
        <link rel="stylesheet" href="{{ asset('css/customNew.css') }}">
    <!--Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<<<<<<< HEAD
    <header id="header-wraper">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="left-element">
                                <i class='bx bxs-edit-location'></i>
                                <span class="location">
                                    #569, Route de Delmas (entre Delmas 91 et 93), Delmas, Haiti
                                </span>
                            </div>
                            <div class="right-elements">
                                <div class="element">A Propos</div>
                                <div class="element">Contactez Nous</div>
                            </div>
                        </div>
                    </div>
                </div>
=======
    <div class="container">
        <div class="row top-wrapper">
            <div class="header-top-1 col-6">
                <ul class="top-menu-list">  
                    <li class="menu-item-1">#569, Route de Delmas ( entre Delmas 91 et 93), Delmas, Haiti</li>
                </ul>
>>>>>>> c3b12a9 (one stage)
            </div>
            <div class="header-top-2 col-6">
                <ul class="top-menu-list">  
                    <li class="menu-item-2">A Propos</li>
                    <li class="menu-item-3">Contactez Nous</li>
                </ul>
            </div> 
        </div>
<<<<<<< HEAD
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/Ebep_Eglise_Logo.svg') }}" alt="EBEP" width="80">
                    <span class="ebep-name">EBEP</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">EBEP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MEDIA CHANNEL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero" style="background: url('{{ asset('images/banner.png') }}') center/cover no-repeat; height: 520px;">
            <div class="hero-content">
                <div class="hero-logo">
                    <img src="{{ asset('images/EBEP_Famille_icon.jpg') }}" alt="Logo" width="180">
                </div>
                <div class="hero-text">
                    <h1>Bienvenue à</br>Église</br>Baptiste</br>Évangélique de</br>Pétion-Ville</h1>
                </div>
            </div>
        </section>
        <section class="content-first">
            <div class="container">
                <div class="row content-first-items">
                    <div class="col-md-4 card">
                        <div class="card-item">
                            <i class='bx bx-history'></i>
                            <h3 class="mb-3">NOTRE HISTOIRE</h3>
                            <p class="content-histoire">Pour comprendre qui nous sommes et où nous allons, vous devez comprendre où nous avons commencé.</p>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="card-item">
                            <i class='bx bx-home-circle'></i>
                            <h3 class="mb-3">NOS MINISTERES</h3>
                            <p>Apprenez ce qui contribue à constituer le corps du Christ. Nous prêchons à travers nos ministères pour glorifier les dons du Seigneur.</p>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="card-item">
                            <i class='bx bxs-contact'></i>
                            <h3 class="mb-3">CONTACT NOUS</h3>
                            <p>Email: eglisebaptiste2017@gmail.com</br> Telephone: 509 22 22 2452</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section pour gallerie-->
        <div class="container section-gallerie-container">
            <h2 class="section-title">
                <b></b>
                <span class="section-title-main">Gallerie</span>
                <b></b>
            </h2>
            <div class="row gallery">
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo1.jpg') }}" alt="photo">
                </div>
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo2.jpg') }}" alt="photo">
                </div>
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo3.jpg') }}" alt="photo">
                </div>
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo6.jpg') }}" alt="photo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo4.jpg') }}" alt="photo">
                </div>
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo5.jpg') }}" alt="photo">
                </div>
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo6.jpg') }}" alt="photo">
                </div>
                <div class="col-md-3 gallery-item">
                    <img src="{{ asset('images/gallery/Photo1.jpg') }}" alt="photo">
                </div>
            </div>
        </div>


        <!--
        <h2>Gutter</h2>
        <div class="container px-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-4 border">Custom column padding</div>
                </div>
                <div class="col">
                    <div class="p-3 border">Custom column padding</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-2">
                <div class="col-6">1
                </div>
                <div class="col-6">2
                </div>
                <div class="col-6">3
                </div>
                <div class="col-6">4
                </div>
            </div>
        </div> -->
    </main>
    <footer>

    </footer>-->
=======
    </div>
>>>>>>> c3b12a9 (one stage)
</body>
</html>