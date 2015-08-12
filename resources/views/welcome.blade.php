@extends('layout');
@section('content')
<div class="full header top-shift">
        <div class="letters">
            <div class="letters-bg">
            </div>
            <img src="images/letters.png" alt="">
        </div>
        <div class="circles wow rotateIn">
            <img class="circle-1" src="images/circle-1.png" alt="">
            <img class="circle-2" src="images/circle-2.png" alt="">
            <img class="circle-3" src="images/circle-3.png" alt="">
            <img class="circle-4" src="images/circle-4.png" alt="">
            <img class="circle-5" src="images/circle-5.png" alt="">
            <img class="circle-6" src="images/circle-6.png" alt="">
        </div>
        <div class="circles alt wow rotateInDownRight">
            <img class="circle-1" src="images/circle-1.png" alt="">
            <img class="circle-2" src="images/circle-2.png" alt="">
            <img class="circle-3" src="images/circle-3.png" alt="">
            <img class="circle-4" src="images/circle-4.png" alt="">
            <img class="circle-5" src="images/circle-5.png" alt="">
            <img class="circle-6" src="images/circle-6.png" alt="">
        </div>
        <div class="row">
            <div class="large-7 columns">
                <h1 class="wow fadeIn" data-wow-duration="1s">
                    We<br />
                    craft<br />
                    digital<br />
                    things.
                </h1>
            </div>
            <div class="large-5 columns">
                <div class="intro wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="special-title">Bienvenue</h2>
                    <p>La cr&eacute;ation de site internet, c'est la base de la visibilit&eacute; sur le net. Encore faut-il avoir un site qui soit la vitrine exacte de votre entreprise ! Et qui vous permette d'attirer de nouveaux clients mais &eacute;galement qui facilite le contact avec eux. Si vous avez d&eacute;j&agrave; un site internet, une e-boutique ou un blog nous mettrons tout en &oelig;uvre pour trouver des solutions pour vous diff&eacute;rencier et g&eacute;n&eacute;rer de nouveaux prospects.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="full centered-text">
        <div class="two spacing"></div>
        <div class="row">
            <div class="large-12 columns">
                <h2 class="special-title alt wow slideInUp">Nos Projets</h2>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                <div class="work wow slideInUp">
                    <a href="work-single-2.html">
                        <img src="images/@stock/work-1.png" alt="">
                        <div class="info">
                            <h3>Project name</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="large-3 columns">
                <div class="work wow slideInUp">
                    <a href="work-single.html">
                        <img src="images/@stock/work-26.jpg" alt="">
                        <div class="info">
                            <h3>Project name</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="large-3 columns">
                <div class="work wow slideInUp">
                    <a href="work-single.html">
                        <img class="" src="images/@stock/work-12.jpg" alt="">
                        <div class="info">
                            <h3>Project name</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="two spacing"></div>

    </div>
    <div class="full">
        <div class="row">
            <div class="large-12 columns">
                <h2 class="special-title">The process</h2>
            </div>
        </div>
        <div class="spacing"></div>
        <div class="row">
            <div class="large-3 columns">
                <div class="icon-text-circle wow fadeInLeft">
                    <i class="fa fa-coffee"></i>
                    <h3>Research</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nemo cumque perspiciatis error ipsum voluptatem, iure facilis, natus voluptas magnam!</p>
                </div>
            </div>
            <div class="large-1 columns">
                <i class="fa fa-long-arrow-right arrow wow fadeInLeft" data-wow-delay="0.4s"></i>
                <i class="fa fa-long-arrow-down arrow down wow fadeInLeft" data-wow-delay="0.4s"></i>
            </div>

            <div class="large-3 columns">
                <div class="icon-text-circle wow fadeInLeft" data-wow-delay="0.5s">
                    <i class="fa fa-flask"></i>
                    <h3>Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ipsum deleniti, animi dolore quam temporibus expedita consectetur in voluptate fugiat.</p>
                </div>
            </div>
            <div class="large-1 columns">
                <i class="fa fa-long-arrow-right arrow wow fadeInLeft" data-wow-delay="0.8s"></i>
                <i class="fa fa-long-arrow-down arrow down wow fadeInLeft" data-wow-delay="0.8s"></i>
            </div>
            <div class="large-3 columns">
                <div class="icon-text-circle wow fadeInLeft" data-wow-delay="1s">
                    <i class="fa fa-inbox"></i>
                    <h3>Maintenance</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem aliquam, nemo ad dolor tempore cupiditate sunt aperiam accusamus, eligendi numquam!</p>
                </div>
            </div>
            <div class="large-1 columns">
            </div>
        </div>
    </div>
@endsection
