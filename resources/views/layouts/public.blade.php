<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coupon</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_aziende.css">
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="css/style_faq.css">
    <link rel="stylesheet" href="css/style_chisiamo.css">
    <link rel="stylesheet" href="css/style_contatti.css">
    <link rel="stylesheet" href="css/catalogo.css">
    <link rel="stylesheet" href="css/dovesiamo.css">
    <link rel="stylesheet" href="css/registrazione.css">



    <script src="js/script.js" defer></script>
    <script src="js/JS_FAQ.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
     <!--Navbar-->
    <div id="nav">
        @include('layouts/navbar')
    </div>

    <!--Content-->

    <div id="content">
        @yield('content')
    </div>
   
    <!--Footer-->

    <footer class="footer">
        <div class="containerf">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{route('chisiamo')}}">Chi siamo</a></li>
                        <li><a href="{{route('dovesiamo')}}">Dove siamo</a></li>
                        
                    </ul>
                </div>
            <div class="footer-col">
                <h4>Help</h4>
                <ul>
                    <li><a href="">FAQ</a></li>
                    <li><a href="{{route('contatti')}}">Contatti</a></li>
                </ul>
                </div>
            </div>
        </div>
   </footer>

</body>
</html>