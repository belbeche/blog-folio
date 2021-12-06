<?php
require('lib/header.php');
require('lib/compteur.php');
$pageTitle = "Accueil";
?>
<!-- Heroes nature banner-->
<!-- ======= Hero Section ======= -->
<div id="hero" class="home perspectiveLeft">

    <div class="container">
        <div class="hero-content">
            <h1><small>#</small>I'm <span class="typed" data-typed-items="Walid BELBECHE, Designer, Developer, Access Code School"></span></h1>
            <li><a href="tel:0762972691"><i class="fas fa-phone-volume" style="color:white;">: 07 62 97 26 91</i></a></li>
            <li><a href="mailto:wbelbeche.s@gmail.com"><i class="fas fa-envelope" style="color:white;">: wbelbeche.s@gmail.com</i></a></li>
            <p>Designer, Developer, in school,promo-72</p>

            <ul class="list-unstyled list-social">
                <li><a href="https://www.linkedin.com/in/walid-belbeche/"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/user/DayzerMC"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/wbelbeche94/?hl=fr"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/belbeche"><i class="fab fa-github"></i></a></li>
            </ul>

            <!-- Scroll Down -->


            <!-- ./Scroll Down -->
        </div>
    </div>
</div>

<main id="main">
    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection" data-aos="fade-down">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 " style="position:relative;top:11em;">
                    <button class="btn btn-outline-primary" style="position:relative;z-index:4;width: 12.50em;background-color:#007aff;"><?= '<strong>' . $compte . '</strong> vues'; ?></button>
                    <div class="div-img-bg">
                        <div class="about-img">
                            <a href="assets/images/profil.jpg"><img src="assets/images/profil.jpg" class="img-responsive rounded" alt="walid BELBECHE"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="flip-down">
                    <div class="about-descr" id="about-descr">

                        <div class="type">
                            <h1 class="title">Presentation</h1>
                            <h1 class="subtitle">
                                <blockquote> walidb806, 5 Years of Web developpement.</blockquote>
                            </h1>

                        </div>

                        <!-- <h2 class="button">Play</h2>
                        <h2 class="button">Pause</h2>
                        <h2 class="button">Restart</h2>
                        <h2 class="button">Loop</h2> -->
                        <h2>Bonjour, Laissez-moi me présenter,</h2>
                        <p class="separator">Je suis un UX & POO Développeur, basé à Nevers, j'aime le design épuré, simple et unique. J'aime aussi créer des identitées de marque, des icônes et des travaux d'illustration. </p>
                        <br>
                        <button class="btn btn-info d-none" style="background-color:#31d2f2;">Promotion: ACS DDS <small>Dijon #2016</small></button>
                        <button class="btn btn-success d-none" style="position:relative;z-index:4;width: 24.50em;">#Nevers 2021</button>
                        <button class="btn btn-warning d-none" style="position:relative;z-index:4;width: 12em;">CERTIFICATS</button>
                        <!-- Technos -->
                        <a href="assets/images/info_profile.jpeg"><img src="assets/images/info_profile.jpeg" alt="walid belbeche"></a>

                        <!-- ./ Technos -->
                    </div>

                </div>
            </div>
        </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
        <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
            <div class="container">
                <div class="type">
                    <h1 class="title">Innovation</h1>
                    <h1 class="subtitle">Envie d'innover ? , c'est par ici !.</h1>
                    <hr>
                </div>
                <div class="services-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-card-checklist"></i>
                                <span>1. L'envie et la passion</span>
                                <p class="separator">Le wireframing étant une étape crucial, la base de la conception... , en plus du large catalogue, différentes étapes vienne s'ajouté à commencer par la maquette (wireframing).</p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-briefcase"></i>
                                <span>2. Braninstorming et ergonomique</span>
                                <p class="separator">Aprés avoir défini les emplacement de votre futur site internet, il faudra également qu'il soit alléger pour le référencement naturel , pour un meilleur classement ! </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-bar-chart"></i>
                                <span>3. UN SITE WEB FONCTIONNEL ET ADAPTÉ</span>
                                <p class="separator">En effet, selon votre métier ou vos cibles vous aurez besoin d’un outil digital adapté : un site vitrine, un site institutionnel, un site catalogue, un site marchand, etc. </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-binoculars"></i>
                                <span>OPTIONS +</span>
                                <p class="separator">Votre application web , vous suit , découvrez les avantages des options offerte. </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-brightness-high"></i>
                                <span> Android | iOS</span>
                                <p class="separator"> Votre application dans la poche, accécible depuis votre smartphone, tablettes, téléphones, ordinateurs,et plus...</p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div><!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection" data-aos="zoom-out">

        <div class="container">
            <div class="type">
                <h1 class="title">Ma biblioteque</h1>
                <h1 class="subtitle">à l'affut des bons plans.</h1>
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Tous</li>
                        <li data-filter=".filter-app">Réalisations</li>
                        <li data-filter=".filter-card">Actualitées</li>
                        <li data-filter=".filter-web">Archives</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <?php foreach ($articles as $article) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/images/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $article['title']; ?></h4>
                            <p><?= $article['introduction']; ?></p>
                            <a href="assets/images/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Zoom image"><i class="bi bi-zoom-in"></i></a>
                            <a href="/templates/articles/show.html.php?id=<?= $article['id']; ?>" class="" title="Plus d'informations"><i class="bi bi-arrow-right-circle"></i>Lire la suite</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection" data-aos="zoom-out">
        <div class="container">
            <div class="contact-block1">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="contact-contact">

                            <h1 class="mb-20">Mes informations</h1>
                            <div class="type">
                                <h2 class="subtitle">Personnel</h2>
                                <hr>
                            </div>
                            <ul class="contact-details">
                                <li>Adresse : <span>600 Avenue de la république</span></li>
                                <li>Code Postal: <span>Garchizy, 58600</span></li>
                                <li>Téléphone: <span>07 62 97 26 91</span></li>
                                <li><i class="fas fa-envelope"></i><span> wbelbeche.s@gmail.com</span></li>
                            </ul>
                            <div class="type">
                                <h2 class="subtitle">Professionnel</h2>
                                <hr>
                            </div>
                            <ul class="contact-details">
                                <li>Adresse : <span> 1 Boulevard de la République</span></li>
                                <li>Code Postal: <span>58000 Nevers</span></li>
                                <li>Téléphone: <span>03 84 76 90 83</span></li>
                                <li><i class="fab fa-internet-explorer"></i> Rendez-vous sûr: <span> <a href="https://walidb806.promo-72.codeur.online">onlineformapro.com</a> </span></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-9">
                        <form action="forms/contact/contact.php" method="post" role="form" class="php-email-form" id="contact-form">
                            <div class="row gy-3">

                                <div class="col-lg-6">
                                    <div class="form-group contact-block1">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" style="cursor: pointer;">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="loading">Chargement</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message à bien été envoyer. Merci !</div>
                                </div>

                                <div class="mt-0">
                                    <input type="submit" class="btn btn-defeault btn-send" value="Envoyer message ! ">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->

</main>



<?php require('lib/footer.php'); ?>