@extends('layout')
@section('content')
<!-- **************************************
                    Page Title
    *************************************** -->
<section class="do-normal-page-title-section">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="do-page-title-wrapper">
                <div class="do-default-page-title col-md-7 col-sm-7 col-xs-12">
                    <h2>CONTACT US</h2>
                    <p>PLACE FOR CREATIVE WORKS</p>
                </div>

                <div class="do-breadcumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><span>CONTACT</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!-- DO PAGE TITLE END -->


<!-- **************************************
            SINGLE PAGE CONTENT
*************************************** -->
<section class="do-contact-page-wrapper">
    <div class="container">
        <div class="row">
            <!-- GOOGLE MAP -->
            <div class="do-google-map">
                <div id="map"></div>
            </div>
            <!-- GOOGLE MAP END -->

            <!-- CONTACT FORM AND ADDRESS -->
            <div class="do-contact-form-address-wrapper">
                <!-- CONTACT FORM -->
                <div class="do-contact-form-wrapper">
                    <h3>SEND YOUR MESSAGE</h3>

                    <form action="#">
                        <input type="text" name="do-input-name" id="do-input-name" placeholder="Name">
                        <input type="email" name="do-input-email" id="do-input-email" placeholder="Email">
                        <input type="text" name="do-input-web" id="do-input-web" placeholder="Web">

                        <textarea name="do-input-message" id="do-input-message" cols="30" rows="10" class="do-input-message" placeholder="Comment"></textarea>

                        <input type="submit" value="SEND" class="do-btn-round-solid">
                    </form>
                </div>
                <!-- CONTACT FORM END -->

                <!-- ADDRESS -->
                <div class="do-contact-add-wrapper">
                    <div class="do-contact-info">
                        <h4>CONTACT INFO</h4>
                        <p>Explain to you how all this mistaken idea of denouncing a teachings of the great explorer of the truth</p>
                    </div>

                    <div class="do-contact-address">
                        <h4>CONTACT INFO</h4>
                        <ul>
                            <li class="do-address">Road 34, House 55<br>
                                Envato Park street, Canbera lane<br>Australia</li>

                            <li class="do-phone">[ 06 ] 862 015 091</li>
                            <li class="do-email">mail@dave.com</li>
                        </ul>

                        <div class="do-coantact-social">
                            <a href="#">
                                <i class="ti-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="ti-twitter-alt"></i>
                            </a>
                            <a href="#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                            <a href="#">
                                <i class="ti-dribbble"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ADDRESS END -->
            </div>
            <!-- CONTACT FORM AND ADDRESS END -->
        </div>
    </div>
</section>
@endsection