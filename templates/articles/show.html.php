<?php
require_once('../../lib/Database.php');
require_once('../../lib/utils.php');

$pdo = getPdo();
/**
 * 1. Récupération du param "id" et vérification de celui-ci
 */
// On part du principe qu'on ne possède pas de param "id"
$article_id = null;

// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $article_id = $_GET['id'];
}

// On peut désormais décider : erreur ou pas ?!
if (!$article_id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}
$erreurId = getArticleId();

// On peut désormais décider : erreur ou pas ?!

$article = findArticle($article_id);
$commentaires = findAllComments($article_id);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="création de site sur mesure">
    <meta content="" name="walid belbeche, php , symfony , poo , pas cher">
    <title><?= $article['title'] ?></title>
    <!-- Template By ThemeWagon -->
    <link rel="stylesheet" href="../../assets/template_css/custom.css">
    <link rel="stylesheet" href="../../assets/template_css/fontawesome.css">
    <link rel="stylesheet" href="../../assets/template_css/slick.min.css">
    <link rel="stylesheet" href="../../assets/template_css/slick-theme.css">
    <link rel="stylesheet" href="../../assets/template_css/templatemo.css">
    <!-- Chargement des CSS de l'app -->
    <link rel="stylesheet" href="../../assets/app.css">
    <link rel="stylesheet" href="../../assets/menu.css">
    <link rel="stylesheet" href="../../assets/carousel.css">
    <!-- chargement de swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Chargement des vendors -->
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<!-- Single Page -->

<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?= $article['title']; ?>
                </h2>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="../../assets/images/portfolio/portfolio-details-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="../../assets/images/portfolio/portfolio-details-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="../../assets/images/portfolio/portfolio-details-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-info">
                        <h3>Projet informations</h3>
                        <ul>
                            <li><strong>Categorie</strong>: Web design</li>
                            <li><strong>Client</strong>: ASU Company</li>
                            <li><strong>Projet date</strong>: Ecrit le <?= $article['created_at'] ?></li>
                            <li><strong>Projet URL</strong>: <a href="#">www.google.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2><?= $article['introduction']; ?></h2>
                        <p>
                            <?= $article['content']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

    <!-- Section commentaires -->
    <div class="container">
        <?php if (count($commentaires) === 0) : ?>
            <h3>Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! :D</h3>
        <?php else : ?>
            <h5>Il y a déjà <?= count($commentaires) ?> réactions : </h5>
            <?php foreach ($commentaires as $commentaire) : ?>
                <br>
                <h3>Commentaire de <?= $commentaire['author'] ?></h3>
                <small>Le <?= $commentaire['created_at'] ?></small>
                <blockquote>
                    <em><?= $commentaire['content'] ?></em>
                </blockquote>
                <a href="delete-comment.php?id=<?= $commentaire['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
            <?php endforeach ?>
        <?php endif ?>
        <form action="save-comment.php" method="post" role="form" class="php-email-form justify-content-center">
            <div class="row gy-3">
                <h3>Vous voulez réagir ? N'hésitez pas les bros !</h3>
                <div class="col-lg-6">
                    <div class="form-group contact-block1">
                        <input type="text" name="author" class="form-control" id="name" placeholder="Votre pseudo !" required>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <textarea class="form-control" name="content" placeholder="Votre commentaire ..." required></textarea>
                    </div>
                </div>
                <input type="hidden" name="article_id" value="<?= $article_id ?>">

                <div class="col-lg-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Votre Commentaire à bien été enrgistrer. Merci!</div>
                </div>

                <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" value="Envoyer commentaire!">
                </div>

            </div>
        </form>
        <!-- ./Section commentaires -->
    </div>




</main><!-- End #main -->



<!-- Chargement des scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/menu.js"></script>

<!-- Chargement du template -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="../../assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../../assets/js/custom.js"></script>
<script type="text/javascript" src="../../assets/js/templatemo.js"></script>
<script type="text/javascript" src="../../assets/js/slick.min.js"></script>
<!-- Chargement des vendors -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/typed.js/typed.min.js"></script>
<script type="text/javascript" src="../../assets/js/main.js"></script>