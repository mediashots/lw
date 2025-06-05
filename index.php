<!DOCTYPE html>
<html lang="en" dir="">
    <head>
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Title -->
        <title>LEICA WELT - Multipurpose Responsive Template</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- Font -->

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="assets/css/vendor.min.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css" />

        <!-- CSS Front Template -->
        <link rel="stylesheet" href="assets/css/theme.min%EF%B9%96v=1.0.css" />
        <!-- mmenu.js CSS -->
        <link rel="stylesheet" href="assets/css/mmenu.css" />
        <script src="assets/js/mburger/index.js" type="module" defer></script>
        <script src="assets/js/mmenu.js" defer></script>
        <script src="assets/js/main.js" defer></script>
        <style>
            .swiper-button-next, .swiper-button-prev {
                color: #fff; /* Farbe der Pfeile */
                width: 44px;
                height: 44px;
            }
        </style>
    </head>

    <body>


        <!-- ========== HEADER ========== -->

        <?php include '_elements/header.php'; ?>

        <!-- ========== END HEADER ========== -->





        <?php include '_elements/hero-slider.php'; ?>





        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" class="mt-5 py-5" role="main">


            <?php include '_elements/slider-1-1.php'; ?>


            <?php include '_elements/textblock.php'; ?>


            <?php include '_elements/bild-video.php'; ?>

            <?php include '_elements/cards.php'; ?>




            <?php include '_elements/slider-15.php'; ?>
            

            <?php include '_elements/faq.php'; ?>

            
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        
        <?php include('_elements/footer.php'); ?>

        <!-- ========== END FOOTER ========== -->


        <?php include('_elements/search_modal.php'); ?>
        

        <!-- JS Implementing Plugins -->
        <script src="assets/js/vendor.min.js" defer></script>
        <script src="assets/vendor/aos/dist/aos.js" defer></script>

        <!-- JS Front -->
        <script src="assets/js/theme.min.js" defer></script>

        <!-- JS Plugins Init. -->
        <script>
          // Warten, bis das DOM geladen ist
          document.addEventListener('DOMContentLoaded', function() {
            
            // 1) Erster Skript-Block
            (function () {
              // INITIALIZATION OF HEADER
              // =======================================================
              new HSHeader("#header").init();
        
              // INITIALIZATION OF SHOW ANIMATIONS
              // =======================================================
              new HSShowAnimation(".js-animation-link");
        
              // INITIALIZATION OF BOOTSTRAP DROPDOWN
              // =======================================================
              HSBsDropdown.init();
        
              // INITIALIZATION OF GO TO
              // =======================================================
              new HSGoTo(".js-go-to");
        
              // INITIALIZATION OF STICKY BLOCKS
              // =======================================================
              new HSStickyBlock('.js-sticky-block', {
                targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
              });
        
              // INITIALIZATION OF AOS
              // =======================================================
              AOS.init({
                duration: 650,
                once: true,
              });
            })();
        
            // 2) Zweiter Skript-Block
            (function () {
              // INITIALIZATION OF SWIPER
              // =======================================================
              var swiper = new Swiper(".js-swiper-gallery-2", {
                slidesPerView: 1,
                pagination: {
                  el: ".js-swiper-gallery-2-pagination",
                  dynamicBullets: true,
                  clickable: true,
                },
              });
            })();
        
            // 3) Dritter Skript-Block
            (function() {
              // INITIALIZATION OF SWIPER
              // =======================================================
              var navigation = new Swiper('.js-swiper-navigation', {
                slidesPerView: 1.1, // Anzahl der Slides, die gleichzeitig sichtbar sind (inkl. Teile)
                centeredSlides: true, // Aktueller Slide wird zentriert
                spaceBetween: 2, // Abstand zwischen den Slides
                loop: true,
               
                pagination: {
                  el: ".js-swiper-gallery-3-pagination",
                  dynamicBullets: true,
                  clickable: true,
                },
                breakpoints: {
                  640: {
                    slidesPerView: 1,
                  },
                  768: {
                    slidesPerView: 1,
                  },
                  1024: {
                    slidesPerView: 1.1,
                    navigation: {
                      nextEl: '.js-swiper-navigation-button-next',
                      prevEl: '.js-swiper-navigation-button-prev',
                    },
                  }
                }
              });
            })();
        
          });
        </script>
        
    </body>
</html>
