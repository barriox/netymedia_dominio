<?php include "logic.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Title -->
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
    <!-- links -->
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Netymedia &raquo; Feed" href="http://netymedia.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Netymedia &raquo; RSS de los comentarios"
        href="http://netymedia.com/comments/feed/" />
    <link rel="shortcut icon" href="http://netymedia.com/wp-content/uploads/2017/08/favicon.ico" type="image/x-icon" />
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
            <section class="section border-0 p-relative nety-bg">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-6 col-xl-7 text-light fs-4 p-lg-5  pt-sm-5 text-sm-center text-lg-start domainname">
                            ¡El nombre de dominio
                            <h1 class="text-light mb-3"><?= $dominio ?></h1>
                            está a la venta!
                        </div>
                        <!-- formulario -->
                        <div class="col-md-6 col-xl-5 top-0 right-2">

                            <div class="card border-radius bg-color-light border-0 box-shadow-3" id="ims">
                                <div class="card-body p-5 m-2 text-center position-relative">
                                    <h4 class="card-title mb-2 text-6">Obtener este dominio</h4>
                                    <p class="card-text">tendrá un precio de <b><?=$precio?>€</b> rellene el formulario
                                        para completar su compra</p>

                                    <form class="contact-form" action="" method="POST">
                                        <div class="contact-form-success alert alert-success d-none mt-4">
                                            <strong>Exito!</strong> Tu mensaje ha sido enviado.
                                        </div>

                                        <div class="contact-form-error alert alert-danger d-none mt-4">
                                            <strong><?= $errEmail?>!</strong> Se ha producido un error al enviar el
                                            correo
                                            <span class="error text-1 d-block"></span>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col text-start">
                                                <input type="text" name="name" value="<?=$name?>" placeholder="Nombre *"
                                                    data-msg-required="Por favor escribe tu nombre." maxlength="100"
                                                    class="form-control text-2-5 p-3" required>
                                                <span class="error"><?= $errName;?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col text-start">
                                                <div class="iti iti--allow-dropdown">
                                                    <div class="iti__flag-container">
                                                        <div class="iti__selected-flag" role="combobox"
                                                            aria-controls="iti-0__country-listbox"
                                                            aria-owns="iti-0__country-listbox" aria-expanded="false"
                                                            tabindex="0" title="United States: +1"
                                                            aria-activedescendant="iti-0__item-us-preferred">
                                                        </div>
                                                        <!-- telephone prefix -->
                                                        <?php include "telephones.php"?>
                                                    </div>
                                                    <input id="tel" name="tel" type="text" autocomplete="off"
                                                        data-intl-tel-input-id="0" value="<?=$tel?>"
                                                        class="form-control text-2-5 p-3" required><br><span
                                                        class="error"><?= $errTel;?></span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col text-start">
                                                <input type="text" name="email" value="<?=$email?>"
                                                    placeholder="E-mail *"
                                                    data-msg-required="Por favor escribe tu correo electrónico."
                                                    maxlength="100" class="form-control text-2-5 p-3" required><span
                                                    class="error"><?= $errEmail;?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col text-start">
                                                <textarea class="form-control text-2-5 p-3" name="comment"
                                                    value="<?=$comment?>" placeholder="Comentarios"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" required>
                                            <label class="form-check-label text-start ps-2" for="flexCheckDefault">
                                                acepto las
                                                <a target="_blank" href="/es-es/terms_of_use">condiciones de uso</a>
                                                y condiciones
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <div class="d-grid gap-2">
                                                    <input type="submit" name="submit" value="Enviar"
                                                        class="btn border-0 btn-tertiary bg-hover-primary text-color-hover-light text-color-primary text-3-5 p-3"
                                                        data-loading-text="Loading..." id="sendbutton">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="container-flex col-ms-12 col-lg-6 ms-auto">
                                                <i class="icons icon-envelope text-4 p-relative top-5 me-2"></i>
                                                <a href="mailto:you@domain.com"
                                                    class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold">info@netymedia.com</a>
                                            </div>
                                            <div class="container-flex col-ms-12 col-lg-6 me-auto pt-lg-3">
                                                <i class="icons icon-phone text-4 p-relative top-5 me-2"></i>
                                                <a href="tel:+1234567890"
                                                    class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold">976
                                                    405 978 </a>
                                            </div>

                                            <!-- </div> -->
                                        </div>
                                    </form>
                                </div>
                                <script>
                                let imagenes = function() {
                                    if (window.screen.width < 768) {
                                        console.log(window.screen.width);
                                        document.getElementById("ims").setAttribute("class",
                                            "card border-radius bg-color-light border-0 box-shadow-3 position-static"
                                        );
                                    } else {
                                        document.getElementById("ims").setAttribute("class",
                                            "card border-radius bg-color-light border-0 box-shadow-3 position-absolute"
                                        );
                                    }
                                }
                                setInterval(function() {
                                    imagenes();
                                }, 100);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row " id="img-container">
                    <div class="col-xl-7 col-md-6">
                        <!-- aqui las fotillos | preguntar por el responsive -->
                        <div class="row">
                            <div class="container text-center col-lg-4 col-md-12 d-md-inline">
                                <img class="img-fluid" src="img/escudo.png" alt="" width="" height="">
                                <div class="d-inline-block text-center">Protección al comprador</div>
                            </div>
                            <div class="container text-center col-lg-4 col-md-12 d-md-inline">
                                <img class="img-fluid" src="img/avion.png" alt="" width="" height="">
                                <div class="d-inline-block text-center">Transferencias rápidas</div>
                            </div>
                            <div class="container text-center col-lg-4 col-md-12 d-md-inline">
                                <img class="img-fluid" src="img/tarjeta.png" alt="" width="" height="">
                                <div class="d-inline-block text-center">Pagos sin inconvenientes</div>
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
    <?php include "footer.php"?>
</body>

</html>