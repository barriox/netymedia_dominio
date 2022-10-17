<?php

if((isset($_GET["dominio"]) && isset($_GET["precio"])) && (!empty($_GET["dominio"]) && !empty($_GET["precio"]))){
    $dominio=$_GET["dominio"];
    $precio=$_GET["precio"];

    $name=$tel=$email=$comment="";
    $errName=$errEmail=$errTel="";
    function test_input($datos) {
      $datos = trim($datos);
      $datos = stripslashes($datos);
      $datos = htmlspecialchars($datos);
      return $datos;
    }

    if (isset($_POST["submit"])) {
      if (empty($_POST["name"])) {
        $errName = "Es obligatorio aportar un nombre";
      } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $errName = "El nombre no puede contener números";
        }
      }
      
      if (empty($_POST["email"])) {
        $errEmail = "Es obligatorio aportar un email";
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errEmail = "El correo no tiene un formato correcto";
        }
      }

      if (empty($_POST["tel"])) {
        $errTel = "Es obligatorio aportar un número de teléfono";
      } else {
        $tel = test_input($_POST["tel"]);
        if (!preg_match("/^[0-9]+$/",$tel)) {
            $errTel = "El teléfono no puede contener letras";
        }else if (!preg_match("/^[0-9]{9}+$/",$tel)){
            $errTel = "El teléfono debe tener 9 digitos";
        }
      }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }

    }

}else{
  header('Location: http://www.netymedia.com/');
}
$_POST = array();
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dominios Netymedia</title>

    <meta name="description"
        content="Diseño web de alta calidad y servicios de desarrollo web. Contacte hoy con Netymedia para obtener su sitio web diseñado. Profesionalismo a un gran precio." />
    <link rel="canonical" href="http://netymedia.com/" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Diseño Web Zaragoza - Páginas Web | Netymedia" />
    <meta property="og:description"
        content="Diseño web de alta calidad y servicios de desarrollo web. Contacte hoy con Netymedia para obtener su sitio web diseñado. Profesionalismo a un gran precio." />
    <meta property="og:url" content="http://netymedia.com/" />
    <meta property="og:site_name" content="Netymedia" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description"
        content="Diseño web de alta calidad y servicios de desarrollo web. Contacte hoy con Netymedia para obtener su sitio web diseñado. Profesionalismo a un gran precio." />
    <meta name="twitter:title" content="Diseño Web Zaragoza - Páginas Web | Netymedia" />
    <meta name="twitter:image" content="http://netymedia.com/wp-content/uploads/2017/08/diseño.png" />
    <meta property="og:title" content="Netymedia - Diseño Web en Zaragoza" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://netymedia.com/" />
    <meta property="og:site_name" content="Netymedia" />
    <meta property="og:description"
        content="Cada detalle es importante. En Netymedia ponemos el acento en funcionalidad y diseño. Te hacemos un sitio web o una tienda online con un bonito diseño, optimizado para móviles y listo para Google." />
    <meta property="og:image" content="http://netymedia.com/wp-content/uploads/2017/08/logo.png" />

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Netymedia &raquo; Feed" href="http://netymedia.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Netymedia &raquo; RSS de los comentarios"
        href="http://netymedia.com/comments/feed/" />
    <link rel="shortcut icon" href="http://netymedia.com/wp-content/uploads/2017/08/favicon.ico" type="image/x-icon" />
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">

    <link rel='stylesheet' id='layerslider-css'
        href='http://netymedia.com/wp-content/plugins/LayerSlider/static/css/layerslider.css?ver=5.6.6' type='text/css'
        media='all' />
    <link rel='stylesheet' id='ls-google-fonts-css'
        href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='http://netymedia.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='responsive-lightbox-swipebox-css'
        href='http://netymedia.com/wp-content/plugins/responsive-lightbox/assets/swipebox/css/swipebox.min.css?ver=2.1.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-consent-style-css'
        href='http://netymedia.com/wp-content/plugins/uk-cookie-consent/assets/css/style.css?ver=4.8.20' type='text/css'
        media='all' />
    <link rel='stylesheet' id='avada-stylesheet-css'
        href='http://netymedia.com/wp-content/themes/avada/style.css?ver=4.0.2' type='text/css' media='all' />
    <!--[if lte IE 9]>
  <link rel='stylesheet' id='avada-shortcodes-css'  href='http://netymedia.com/wp-content/themes/avada/shortcodes.css?ver=4.0.2' type='text/css' media='all' />
  <![endif]-->
    <link rel='stylesheet' id='fontawesome-css'
        href='http://netymedia.com/wp-content/themes/avada/assets/fonts/fontawesome/font-awesome.css?ver=4.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='avada-iLightbox-css'
        href='http://netymedia.com/wp-content/themes/avada/ilightbox.css?ver=4.0.2' type='text/css' media='all' />
    <link rel='stylesheet' id='avada-animations-css'
        href='http://netymedia.com/wp-content/themes/avada/animations.css?ver=4.0.2' type='text/css' media='all' />
    <link rel='stylesheet' id='avada-dynamic-css-css'
        href='//netymedia.com/wp-content/uploads/avada-styles/avada-14.css?timestamp=1654186229&#038;ver=4.8.20'
        type='text/css' media='all' />


    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Telephone dropdown -->
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/demo.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-business-consulting-5.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-business-consulting-5.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    <style>
    #tel {padding-left: 90px !important;}</style>
</head>

<body>
    <header>
        <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="Bootstrap" width="270" height="60">
                </a>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="container-flex">



            <section class="section border-0 bg-quaternary p-relative" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 50%, rgba(253,187,45,1) 50%, rgba(153,0,0,1) 50%);">
                <div class="container mt-5">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">

                        </div>
                        <div class="col-lg-11 bg-color-light border-radius" style="background: transparent !important;">
                            <div class="">
                                <div class="row justify-content-between">
                                    <div class="row col-lg-6">
                                        <h2 class="my-5 ps-lg-5 ms-lg-4" id="dom">¡El nombre de dominio</br><span id="bold"><?= $dominio ?></span><br>está a la venta!</h2>
                                    </div>
                                    <!-- formulario -->
                                    <div class="col-lg-5">

                                        <div class="card border-radius bg-color-light border-0 box-shadow-3">
                                            <div class="card-body p-5 m-2 text-center">
                                                <h4 class="card-title mb-2 text-6">Obtener este dominio</h4>
                                                <p class="card-text">tendrá un precio de <b><?=$precio?>€</b> rellene el formulario para completar su compra</p>

                                                <form class="contact-form" action="" method="POST">
                                                    <div class="contact-form-success alert alert-success d-none mt-4">
                                                        <strong>Success!</strong> Your message has been sent to us.
                                                    </div>

                                                    <div class="contact-form-error alert alert-danger d-none mt-4">
                                                        <strong><?= $errEmail?>!</strong> There was an error sending
                                                        your message.
                                                        <span class="mail-error-message text-1 d-block"></span>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col text-start">
                                                            <input type="text" name="name" value="<?=$name?>"
                                                                placeholder="Nombre *"
                                                                data-msg-required="Por favor escribe tu nombre."
                                                                maxlength="100" class="form-control text-2-5 p-3"
                                                                required><span style="color:red"><?= $errName;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col text-start">
                                                            <div class="iti iti--allow-dropdown">
                                                                <div class="iti__flag-container">
                                                                    <div class="iti__selected-flag" role="combobox"
                                                                        aria-controls="iti-0__country-listbox"
                                                                        aria-owns="iti-0__country-listbox"
                                                                        aria-expanded="false" tabindex="0"
                                                                        title="United States: +1"
                                                                        aria-activedescendant="iti-0__item-us-preferred">
                                                                    </div>
                                                                    <!-- La Lista (cuidadín quietorl) -->
                                                                    <!-- La Lista (cuidadín quietorl)22222222222 -->
                                                                    <?php include "telephones.php"?>
                                                                </div>
                                                                <input id="tel" name="tel" type="text"
                                                                    autocomplete="off" data-intl-tel-input-id="0"
                                                                    value="<?=$tel?>" class="form-control text-2-5 p-3"
                                                                    required><br><span
                                                                    style="color:red"><?= $errTel;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col text-start">
                                                            <input type="text" name="email" value="<?=$email?>"
                                                                placeholder="E-mail *"
                                                                data-msg-required="Por favor escribe tu correo electrónico."
                                                                maxlength="100" class="form-control text-2-5 p-3"
                                                                required><span style="color:red"><?= $errEmail;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col text-start">
                                                            <textarea class="form-control text-2-5 p-3" name="comment"
                                                                value="<?=$comment?>"
                                                                placeholder="Comentarios"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <div class="d-grid gap-2">
                                                                <input type="submit" name="submit" value="Enviar"
                                                                    class="btn border-0 btn-tertiary bg-hover-primary text-color-hover-light text-color-primary text-3-5 p-3"
                                                                    data-loading-text="Loading..."
                                                                    style="padding-bottom: 3rem!important; margin:auto;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col pt-4">
                                                            <div class="hstack gap-3">
                                                                <div class="ms-auto">
                                                                    <i
                                                                        class="icons icon-envelope text-4 p-relative top-5 me-2"></i>
                                                                    <a href="mailto:you@domain.com"
                                                                        class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold">info@netymedia.com</a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div class="me-auto">
                                                                    <i
                                                                        class="icons icon-phone text-4 p-relative top-5 me-2"></i>
                                                                    <a href="tel:+1234567890"
                                                                        class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold">976
                                                                        405 978</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-lg-6" style="position: absolute; top: 65%;">
                                    <!-- aqui las fotillos | preguntar por el responsive -->
                                    <div class="container col-2" style="height: 180px; width: 140px;">
                                        <img src="img/escudo.png" alt="" width="" height="">
                                        <p>Protección al comprador</p>
                                    </div>
                                    <div class="container col-2" style="height: 180px; width: 140px;">
                                        <img src="img/avion.png" alt="" width="" height="">
                                        <p>Transferencias rápidas</p>
                                    </div>
                                    <div class="container col-2" style="height: 180px; width: 140px;">
                                        <img src="img/tarjeta.png" alt="" width="" height="">
                                        <p>Pagos sin inconvenientes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
    </main>    
        <!-- scripts telephone dropdown -->
        <script src="js/intlTelInput.js"></script>
        <script>
        var input = document.querySelector("#tel");
        window.intlTelInput(input, {
            utilsScript: "js/utils.js",
        });
        </script>
        <script class="iti-load-utils" async="" src="js/utils.js"></script>

        <!-- footer netymedia -->
        <?php include "footer_2.php"?>
</body>

</html>