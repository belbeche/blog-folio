<!-- ======= Footer ======= -->
<div id="footer" class="text-center">
    <div class="container">
        <div class="socials-media text-center">

            <ul class="list-unstyled">
                <li><a href="https://www.linkedin.com/in/walid-belbeche/"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/user/DayzerMC"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/wbelbeche94/?hl=fr"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/belbeche"><i class="fab fa-github"></i></a></li>
            </ul>

        </div>

        <p>&copy; Copyrights Walid BELBECHE. All rights reserved.</p>

        <div class="credits">
            <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
            Developper <a href="http://github.com/belbeche">Walid BELBECHE</a> |
            Designer <a href="https://bootstrapmade.com/">BootstrapMade </a>

        </div>

    </div>
</div><!-- End Footer -->
<script src="https://kit.fontawesome.com/e73a7a7bd1.js" crossorigin="anonymous"></script>
<!-- Chargement des scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/menu.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
<script>
    AOS.init();
</script>


<!-- Chargement du template -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/custom.js"></script>
<script type="text/javascript" src="../assets/js/templatemo.js"></script>
<script type="text/javascript" src="../assets/js/slick.min.js"></script>
<!-- <script type="text/javascript" src="../assets/js/particles.js"></script> -->
<!-- <script type="text/javascript" src="../assets/js/app.js"></script> -->
<script type="text/javascript" src="../assets/js/stats.js"></script>
<!-- <script type="text/javascript" src="../assets/js/gallery.js"></script> -->
<!-- Chargement des vendors -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/typed.js/typed.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
    const constraints = {
        name: {
            presence: {
                allowEmpty: false
            }
        },
        email: {
            presence: {
                allowEmpty: false
            },
            email: true
        },
        message: {
            presence: {
                allowEmpty: false
            }
        }
    };

    const form = document.getElementById('contact-form');

    form.addEventListener('submit', function(event) {
        const formValues = {
            name: form.elements.name.value,
            email: form.elements.email.value,
            message: form.elements.message.value
        };

        const errors = validate(formValues, constraints);

        if (errors) {
            event.preventDefault();
            const errorMessage = Object
                .values(errors)
                .map(function(fieldValues) {
                    return fieldValues.join(', ')
                })
                .join("\n");

            alert(errorMessage);
        }
    }, false);
</script>
</body>

</html>