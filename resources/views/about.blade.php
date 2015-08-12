@extends('layout');
@section('content')
    <div class="full page-header">
        <div class="row">
            <div class="large-12 columns">
                <h1 class="wow fadeIn" data-wow-duration="1s">
                    About
                </h1>
                <div class="intro wow fadeIn" data-wow-delay="0.3s">
                    <p>We are a digital agency based in UK. There is only one boss. The customer. And he can fire everybody in the company from the chairman on down, simply by spending his money somewhere else. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem distinctio totam unde aliquid delectus veritatis, quasi ad porro. Voluptas corrupti magnam libero corporis quisquam architecto animi, dicta nobis rerum minus.</p>
                </div>
            </div>
        </div>
    </div>
    <!--     <div class="full no-padding">
          <div class="about-image">
            <img src="images/@stock/about.jpg" alt="">
          </div>
        </div> -->

    <div class="full">
        <div class="row">
            <div class="large-12 columns">
                <h2 class="special-title wow slideInUp">
                    The team
                </h2>
            </div>
        </div>
        <div class="spacing"></div>
        <div class="row">
            <div class="large-3 columns">
                <div class="member wow slideInUp">
                    <img src="images/@stock/member-1.jpg" alt="">
                    <img class='colored' src="images/@stock/member-1-c.jpg" alt="">
                    <h4>Tom Hanson</h4>
                    <p class='position'>Founder</p>
                    <ul class="socials">
                        <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                        <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                        <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                        <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="large-3 columns">
                <div class="member wow slideInUp">
                    <img src="images/@stock/member-2.jpg" alt="">
                    <img class='colored' src="images/@stock/member-2-c.jpg" alt="">
                    <h4>Kate Holms</h4>
                    <p class='position'>Project manager</p>
                    <ul class="socials">
                        <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                        <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                        <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                        <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="large-3 columns">
                <div class="member wow slideInUp">
                    <img src="images/@stock/member-3.jpg" alt="">
                    <img class='colored' src="images/@stock/member-3-c.jpg" alt="">
                    <h4>Munk Taylor</h4>
                    <p class='position'>Web designer</p>
                    <ul class="socials">
                        <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                        <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                        <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                        <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="large-3 columns">
                <div class="member wow slideInUp">
                    <img src="images/@stock/member-5.jpg" alt="">
                    <img class='colored' src="images/@stock/member-5-c.jpg" alt="">
                    <h4>Zam White</h4>
                    <p class='position'>Developer</p>
                    <ul class="socials">
                        <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                        <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                        <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                        <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
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
    <!--     <div class="full no-padding">
          <div class="about-image">
            <img src="images/@stock/about.jpg" alt="">
          </div>
        </div> -->
@endsection

@section('css')
    @parent
    <link href="/css/sinkinsans.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/css/slick-theme.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/css/slick.css" media="screen" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    @parent
    <script src="/js/slick.min.js"></script>
@endsection