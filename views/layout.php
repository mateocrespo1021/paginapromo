<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./build/css/app.css">
    <title>WebWorks : Desarrollo de Páginas Web Quito | Guayaquil | Cuenca</title>
    <link rel="shortcut icon" href="/build/img/coding.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="header__contenido">
            <a class="header__logo" href="/">
                Web<span class="header__span">Works</span>
            </a>
            <nav class="header__nav">
                <a class="header__servicios" href="#servicios">Servicios</a>
                <a class="header__nosotros" href="#nosotros">¿Quiénes Somos?</a>
                <a class="header__contacto" href="#contacto">Contacto</a>
            </nav>
        </div>
    </header>
    
    <?php echo $contenido; ?>
    <a class="icono-whats" href="https://wa.me/593983513154" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

    <footer class="footer">
        <div class="footer__contenedor">
            <div class="footer__info">
                <h3 class="footer__h3"> Información</h3>
                <div class="footer__div">
                    <i class="fa-solid fa-phone"></i>
                    <p> (+593) 0983513154</p>
                </div>
                <div class="footer__div">
                <i class="fa-solid fa-envelope"></i>
                    <p> webworks@gmail.com</p>
                </div>
                <div class="footer__div">
                <i class="fa-solid fa-location-dot"></i>
                    <p> Cuenca, Ecuador.</p>
                </div>              
            </div>
            <div class="footer__servicios">
                <h3 class="footer__h3">Servicios</h3>
                <p>Tiendas Online</p>
                <p>Páginas Web</p>
                <p>Mantenimiento Web</p>
            </div>
            <div class="footer__asesorias">
                <h3 class="footer__h3">Asesorias</h3>
                <div class="footer__lenguajes">
                    <i class="fa-brands fa-php"></i>
                    <i class="fa-brands fa-square-js"></i>
                    <i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3-alt"></i>
                    <i class="fa-brands fa-java"></i>
                </div>
            </div>
            <div class="footer__estudio">
                <h3 class="footer__h3">Desarollo Web</h3>
                <a href="/" class="footer__logo">Web<span class="footer__span">Works</span></a>
            </div>

        </div>
        <p class="footer__copy">Copyright &copy; <?php echo date("Y"); ?> WebWorks</p>
    </footer>
    <script src="/build/js/main.min.js" defer></script>
</body>

</html>