<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Менин мектебим</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="index.html">Негизги бет <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="index.html">Окуучулар <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="index.html">Мугалимдер <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="index.html">Сабактардын жумалык планы <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Кирүү</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Катталуу</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
@yield('content')

<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <div class="footer-brand-wrapper">
                    <h3>Байланышуу үчүн:</h3>
                </div>
                <p class="contact-details">bektemirkumarbayuulu@gmail.com</p>
                <p class="contact-details">+996 776 024 685</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-youtube"></i></a>
                    <a href="#!"><i class="fab fa-instagram"></i></a>
                    <a href="#!"><i class="fab fa-telegram"></i></a>
                </nav>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
