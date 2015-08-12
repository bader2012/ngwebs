<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Arniyon studio</title>
    @section('css')
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/responsive.css" />
    <link href="/css/fontello.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/bower_components/components-font-awesome/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/css/reklamescript.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/css/animate.css" media="screen" rel="stylesheet" type="text/css" />
    @show
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <script src="/bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<div class='contain-to-grid sticky transparent'>
    <nav class='top-bar' data-options='sticky_on: large' data-topbar=''>
        <ul class='title-area'>
            <li class='name'>
                <h1>
                    <a href='/'>
                        <img src="images/logo.png" alt="">
                    </a>
                </h1>
            </li>
        </ul>
        <div class="menu-toggler right">
            <a href='#'>
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </nav>
</div>
<header class=" ">
    <div class='contain-to-grid sticky transparent'>
        <nav class='top-bar' data-options='sticky_on: large' data-topbar=''>
            <ul class='title-area'>
                <li class='name'>
                    <h1>
                        <a href='/'>
                            <img src="images/logo-white.png" alt="">
                        </a>
                    </h1>
                </li>
            </ul>
            <div class="menu-toggler right">
                <a href='#'>
                    <i class="fa fa-close"></i>
                </a>
            </div>
        </nav>
    </div>
    <div class="four spacing"></div>
    <div class="row">
        <div class="large-12 columns">
            <ul class="centered-text menu">
                <li class='active'>
                    <a class="" href='/'>Accueil</a>
                </li>
                <li>
                    <a class="" href='/about'>A propos</a>
                </li>
                <li class=''>
                    <a class="" href='/portfolio'>Nos projets</a>
                </li>
                <li class=''>
                    <a class="" href='/job'>Recrutement</a>
                </li>
                <li class=''>
                    <a class="" href='/blog'>Blog</a>
                </li>
                <li class=''>
                    <a class="" href='/contact'>Contactez Nous</a>
                </li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

<div class="full light-grey footer no-overflow">
    <div class="row">
        <div class="large-6 columns">
            <ul class="socials wow bounceInUp">
                <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                <li><a href="#"><i class='fa fa-youtube'></i></a></li>
            </ul>
        </div>
        <div class="large-6 columns">
            <ul>
                <li>Immeuble Abroug, Boulevard la perle du sahel.</li>
                <li>Khezama, Sousse.</li>
                <li>+216 73 240 083</li>
                <li><a href="#">contact@ngwebs.io</a></li>
            </ul>
            <p>&copy; 2015 Next Generation Web Solutions. Tous droits r&eacute;serv&eacute;s.</p>
        </div>

    </div>

</div>
@section('js')
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/foundation/js/foundation.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/wow.min.js"></script>
@show
</body>
</html>
