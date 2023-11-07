<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eglise Evangelique Baptiste de Petion-Ville</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <!--CSS external-->
        <link rel="stylesheet" href="{{ asset('css/custom_good.css') }}"> 
        <!--Boxicom css-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    </head>
    <body>
        <header id="header-wraper">
            <!-- <div class="top-bar">
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
                </div>
            </div> -->
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
                </div>
            </div>
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
            <!--Other section -->
            <div class="container-xxl bd-gutter masthead-followup">
                <section class="row g-3 g-md-5 pb-md-5 mb-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="masthead-followup-icon d-inline-block mb-3" style="--bg-rgb: var(--bd-teal-rgb);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" focusable="false" viewBox="0 0 16 16">
                            <path d="M0 6a6 6 0 1112 0A6 6 0 010 6z"></path>
                            <path d="M12.93 5h1.57a.5.5 0 01.5.5v9a.5.5 0 01-.5.5h-9a.5.5 0 01-.5-.5v-1.57a6.953 6.953 0 01-1-.22v1.79A1.5 1.5 0 005.5 16h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0014.5 4h-1.79c.097.324.17.658.22 1z"></path>
                            </svg>
                        </div>
                        <h2 class="display-5 mb-3 fw-semibold lh-sm">Personalize it with Bootstrap&nbsp;Icons</h2>
                        <p class="lead fw-normal">
                            <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a> is an open source SVG icon library featuring over 1,800 glyphs, with more added every release. They're designed to work in any project, whether you use Bootstrap itself or not. Use them as SVGs or icon fonts—both options give you vector scaling and easy customization via CSS.
                        </p>
                        <p class="d-flex justify-content-start lead fw-normal mb-md-0">
                            <a href="https://icons.getbootstrap.com/" class="icon-link icon-link-hover fw-semibold">
                            Get Bootstrap Icons
                            <svg class="bi"><use xlink:href="#arrow-right"></use></svg>
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid mt-3 mx-auto" src="{{ asset('images/gallery/Photo1.jpg') }}" alt="Bootstrap Icons" width="700" height="425" loading="lazy">
                    </div>
                </section>
                <section class="row g-3 g-md-5 pb-md-5 mb-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="masthead-followup-icon d-inline-block mb-3" style="--bg-rgb: var(--bd-violet-rgb);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" focusable="false" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 16a6 6 0 006-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 006 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="display-5 mb-3 fw-semibold lh-sm">Make it yours with official Bootstrap Themes</h2>
                        <p class="lead fw-normal">
                            Take Bootstrap to the next level with premium themes from the <a href="https://themes.getbootstrap.com/">official Bootstrap Themes marketplace</a>. Themes are built on Bootstrap as their own extended frameworks, rich with new components and plugins, documentation, and powerful build tools.
                        </p>
                        <p class="d-flex justify-content-start lead fw-normal mb-md-0">
                            <a href="https://themes.getbootstrap.com/" class="icon-link icon-link-hover fw-semibold">
                            Browse Bootstrap Themes
                            <svg class="bi"><use xlink:href="#arrow-right"></use></svg>
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid mt-3 mx-auto" src="{{ asset('images/gallery/Photo3.jpg') }}" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                </section>
            </div>
            <!--section pour gallerie-->
            <div class="container section-gallerie-container">
                <h2 class="section-title">
                    <b></b>
                    <span class="section-title-main">Gallerie</span>
                    <b></b>
                </h2>
                <div class="row gallery-row-1">
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
                <div class="row gallery-row-2">
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
        <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
            <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
                        <img src="{{ asset('images/Ebep_Eglise_Logo.svg') }}" alt="EBEP" width="80">
                        <!--<span class="ebep-name">EBEP</span>-->
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Designed and built with all the love in the world by the Bootstrap team with the help of our contributors. </li>
                    </ul>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                        <h5>Media Liens</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/">Sermons</a></li>
                            <li class="mb-2"><a href="/docs/5.3/">Livestream & Video</a></li>
                            <li class="mb-2"><a href="/docs/5.3/examples/">Examples</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5>Guides</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/docs/5.3/getting-started/">L'heure services</a></li>
                            <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Devenir Membre</a></li>
                            <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Visiter nous</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5>Nos Projects</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener">Faire un Don</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank" rel="noopener">Projects en cours</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank" rel="noopener">CED</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><i class='bx bxl-instagram'></i></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><i class='bx bxl-twitter' ></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>