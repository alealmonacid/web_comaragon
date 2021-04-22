<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Somos una empresa dedica al rubro de frutas y verduras ubicada caminó a tutuquen #2141 
    En la actualidad contamos con mas de mil productos en stock .
    Tambien brindamos reparto a domicilio totalmenten GRATIS">
    <meta http-equiv="refresh" content="10; url=http://comercializadoraaragon.cl/">
    <meta name="author" content="Comercializadora Aragon">

    <!-- Insert Favicon Here -->
    <link href="images/favicon.png" rel="icon">

    <title>Comercializadora Aragón - Bienvenidos</title>

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font-Awesome CSS File -->
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Slider Revolution CSS File -->
    <link rel="stylesheet" href="css/settings.css">

    <!--  Fancy Box CSS File -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <!-- Circleful CSS File -->
    <link rel="stylesheet" href="css/jquery.circliful.css">

    <!-- Animate CSS File -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="css/cubeportfolio.min.css">

    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Food Style CSS File -->
    <link rel="stylesheet" href="com_aragon/css/style.css">

    <!-- Color StyleSheet CSS File -->
    <link href="css/orange.css" rel="stylesheet" type="text/css">

    <link href="css/font-six.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/3cc04b2021.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

</head>

<body data-target=".navbar" id="body" class="centered-nav food_variation index-light" >
<?php
if(isset($_POST['email'])) {
 
    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
 
    $email_to = "";
 
    $email_subject = "Contacto sitio web";   

 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    
    $name = $_POST['name']; // requerido
 
    $email_from = $_POST['email']; // requerido


    $message = $_POST['message']; // requerido

//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $name . "\n";
$email_message .= "Correo: " . $email_from . "\n";
$email_message .= "Mensaje: " . $message . "\n\n";
  
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>


    <!-- Loader -->

    <div class="loader">

        <div class="loader-inner">

            <div class="spinner">

                <div class="dot1"></div>

                <div class="dot2"></div>

            </div>

        </div>

    </div>

    <!-- Parent Section -->

    <section class="page_content_parent_section" >


        <!-- Header Section -->

        <header>

            <!-- Navbar Section -->

            <nav class="navbar navbar-fixed-top green ">
                <div class="container-fluid">
                    <!--second nav button -->
                    <div id="menu_bars" class="right menu_bars">
                        <span class="t1"></span>
                        <span class="t2"></span>
                        <span class="t3"></span>
                    </div>
                    <!-- Brand and toggle get grouped for better mobile display -->


                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand orange_logo" href="#"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse  ">

                            <div class="navbar-left">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#home" class="scroll">Inicio</a></li>
                                    <li><a href="#quienes_somos" class="scroll">Quienes Somos</a></li>
                                    <li><a href="#productos" class="scroll">Nuestros Productos</a></li>
                                </ul>
                            </div>
                            <div class="navbar-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#rrss" class="scroll">Nuestras Redes</a></li>
                                    <li><a href="#opiniones" class="scroll">Opiniones</a></li>
                                    <li><a href="#contacto" class="scroll">Contacto</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <div class="sidebar_menu">
                        <nav class="pushmenu pushmenu-right">
                            <a class="push-logo" href="#"><img src="images/logo-orange-dark.png" alt="logo"></a>
                            <ul class="push_nav centered">
                                <li class="clearfix">
                                    <a href="#home" class="scroll"><span>01.</span>Inicio</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#quienes_somos" class="scroll"> <span>02.</span>Quienes Somos</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#productos" class="scroll"> <span>03.</span>Nuestros Productos</a>

                                </li>



                                <li class="clearfix">

                                    <a href="#rrss" class="scroll"> <span>04.</span>Nuestras Redes</a>
                                </li>

                                <li class="clearfix">

                                    <a href="#opiniones" class="scroll"> <span>05.</span>Opiniones</a>
                                </li>

                                <li class="clearfix">
                                    <a href="#contacto" class="scroll"> <span>06.</span>Contacto</a>

                                </li>
                            </ul>
                            <div class="clearfix"></div>

                        </nav>
                    </div>
                </div>
            </nav>

            <!-- /Navbar Section -->



        </header>
        <!-- Main Slider Section -->

        <!-- /Main Slider Section -->
        <!-- /Header Section -->
    </section>
    <section>

    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-6"><img src="images/logo.png" width="50%"></div>
    <div class="col-md-6"><h2>Gracias por comunicarte con nosotros, nos pondremos en contacto lo más pronto posible</h2></div>
    <div class="col-md-12"><center><h3>Volviendo al inicio en 10 segundos</h3></center></div>
    </div>

    </div>

        </div>


    </section>
    


    <!-- /Parent Section Ended -->

    <!-- jQuery 2.2.0-->
    <script src="js/jquery.js"></script>

    <!-- Google Map Api -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"
        type="text/javascript"></script>
    <script src="js/map.js" type="text/javascript"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Owl Carousel 2 Core JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.animate.js"></script>
    <script src="js/owl.autoheight.js"></script>
    <script src="js/owl.autoplay.js"></script>
    <script src="js/owl.autorefresh.js"></script>
    <script src="js/owl.hash.js"></script>
    <script src="js/owl.lazyload.js"></script>
    <script src="js/owl.navigation.js"></script>
    <script src="js/owl.support.js"></script>
    <script src="js/owl.video.js"></script>

    <!-- Fancy Box Javacript -->
    <script src="js/jquery.fancybox.js"></script>

    <!-- Wow Js -->
    <script src="js/wow.min.js"></script>

    <!-- Appear Js-->
    <script src="js/jquery.appear.js"></script>

    <!-- Countdown Js -->
    <script src="js/jquery.countdown.js"></script>

    <!-- Parallax Js -->
    <script src="js/parallax.min.js"></script>

    <!-- Cube Portfolio Core JavaScript -->
    <script src="js/jquery.cubeportfolio.min.js"></script>

    <!-- Circliful Core JavaScript -->
    <script src="js/jquery.circliful.min.js"></script>

    <!-- Swiper Slider Core JavaScript -->
    <script src="js/swiper.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>

    <!-- Food Custom Script -->
    <script src="com_aragon/js/script.js"></script>

    <script>$(".owl-carousel").owlCarousel({
            items: 1
        });</script>

    <script>
        let modalId = $('#image-gallery');

        $(document)
            .ready(function () {

                loadGallery(true, 'a.thumbnail');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }

                /**
                 *
                 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                 * @param setClickAttr  Sets the attribute for the click handler.
                 */

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function () {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#image-gallery-title')
                            .text($sel.data('title'));
                        $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function () {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function () {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function (e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image')
                                .click();
                        }
                        break;

                    case 39: // right
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });

        //Filter Button

        $(document).ready(function () {

            $(".filter-button").click(function () {
                var value = $(this).attr('data-filter');

                if (value == "todo") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

        });

    </script>

</body>

</html>

<?php
 
}
 
?>