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
    <div class="container">
        <div class="row top-wrapper">
            <div class="header-top-1 col-6">
                <ul class="top-menu-list">  
                    <li class="menu-item-1">#569, Route de Delmas ( entre Delmas 91 et 93), Delmas, Haiti</li>
                </ul>
            </div>
            <div class="header-top-2 col-6">
                <ul class="top-menu-list">  
                    <li class="menu-item-2">A Propos</li>
                    <li class="menu-item-3">Contactez Nous</li>
                </ul>
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
                    <img class="img-fluid mt-3 mx-auto" srcset="/docs/5.3/assets/img/bootstrap-icons.png,
                                                                /docs/5.3/assets/img/bootstrap-icons@2x.png 2x" src="/docs/5.3/assets/img/bootstrap-icons.png" alt="Bootstrap Icons" width="700" height="425" loading="lazy">
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
                    <img class="img-fluid mt-3 mx-auto" srcset="/docs/5.3/assets/img/bootstrap-themes.png,
                                                                /docs/5.3/assets/img/bootstrap-themes@2x.png 2x" src="/docs/5.3/assets/img/bootstrap-themes.png" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                    <span class="fs-5">Bootstrap</span>
                </a>
                <ul class="list-unstyled small">
                    <li class="mb-2">Designed and built with all the love in the world by the <a href="/docs/5.3/about/team/">Bootstrap team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                    <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                    <li class="mb-2">Currently v5.3.2.</li>
                </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/docs/5.3/">Docs</a></li>
                    <li class="mb-2"><a href="/docs/5.3/examples/">Examples</a></li>
                    <li class="mb-2"><a href="https://icons.getbootstrap.com/">Icons</a></li>
                    <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                    <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                    <li class="mb-2"><a href="https://cottonbureau.com/people/bootstrap" target="_blank" rel="noopener">Swag Store</a></li>
                </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                <h5>Guides</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/docs/5.3/getting-started/">Getting started</a></li>
                    <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Starter template</a></li>
                    <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Webpack</a></li>
                    <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/">Parcel</a></li>
                    <li class="mb-2"><a href="/docs/5.3/getting-started/vite/">Vite</a></li>
                </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                <h5>Projects</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener">Bootstrap 5</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank" rel="noopener">Bootstrap 4</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank" rel="noopener">Icons</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/rfs" target="_blank" rel="noopener">RFS</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/examples/" target="_blank" rel="noopener">Examples repo</a></li>
                </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                <h5>Community</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues" target="_blank" rel="noopener">Issues</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions" target="_blank" rel="noopener">Discussions</a></li>
                    <li class="mb-2"><a href="https://github.com/sponsors/twbs" target="_blank" rel="noopener">Corporate sponsors</a></li>
                    <li class="mb-2"><a href="https://opencollective.com/bootstrap" target="_blank" rel="noopener">Open Collective</a></li>
                    <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5" target="_blank" rel="noopener">Stack Overflow</a></li>
                </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            
                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>