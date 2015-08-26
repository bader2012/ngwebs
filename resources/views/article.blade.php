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
                    <h2>BLOG</h2>
                    <p>PLACE FOR BLOG</p>
                </div>

                <div class="do-breadcumb">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><span>BLOG</span></li>
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
<section class="do-blog-single-wrapper">
    <div class="container">
        <div class="row">
            <!-- BLOG SINGLE CONTENT -->
            <div class="do-blog-single-content col-md-8 col-sm-8 col-xs-12">
                <div class="do-blog-single-img-wrapper">
                    <img src="images/blog-single-img.jpg" alt="Blog Single Image">

                    <div class="do-post-format-icon">
                        <i class="fa fa-quote-right"></i>
                    </div>
                </div>

                <div class="do-blog-single-details ">
                    <!--  POST TITLE -->
                    <div class="do-blog-post-title-wrapper do-blog-single-inner-sec">
                        <div class="do-blog-post-date">
                            <span class="do-post-date">12</span>
                            <span class="do-post-month">DEC</span>
                        </div>

                        <div class="do-blog-post-titles">
                            <h1><a href="#">I AM NOT ALONE in ROOM</a></h1>
                            <a href="#" class="do-blog-post-author">ADMIN</a>
                        </div>
                    </div>
                    <!--  POST TITLE END-->

                    <!--  POST TEXT -->
                    <div class="do-blog-post-text do-blog-single-inner-sec">
                        <p>Enthusiastically impact plug-and-play value afters market models. Competently formulate flexible processes without meto repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of weinnovation.Seamlessly leverage other’s flexible resources an without customer directed methodologies. Globally impact but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.<br />
                            <br/>
                            Beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire. There are many variations of but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look and a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the a to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of beandful of model sentence structures, to generate Lorem Ipsum which.</p>

                        <a href="#" class="do-btn-round-outline">SHARE</a>
                    </div>
                    <!--  POST TEXT END -->

                    <!--  BLOG COMMENTS -->
                    <div class="do-blog-comments-wrapper do-blog-single-inner-sec">
                        <h2>COMMENTS</h2>

                        <div class="do-blog-comments">
                            <div class="do-user-img">
                                <img src="images/comment-img.jpg" alt="User Image">
                            </div>

                            <div class="do-comments">
                                <div class="do-comments-title">
                                    <h4 class="do-user-name"><a href="#">ADMIN</a> SAYS :</h4>
                                    <span class="do-comment-date-time">Dec 8, 2014  at 9.15 am</span>
                                </div>

                                <p>beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire there are many</p>
                            </div>

                            <a href="#" class="do-comment-reply-btn"><i class="pe-7s-back"></i></a>
                        </div>

                        <div class="do-blog-comments do-comment-reply">
                            <div class="do-user-img">
                                <img src="images/comment-img.jpg" alt="User Image">
                            </div>

                            <div class="do-comments">
                                <div class="do-comments-title">
                                    <h4 class="do-user-name"><a href="#">BEER</a> SAYS :</h4>
                                    <span class="do-comment-date-time">Dec 8, 2014  at 9.15 am</span>
                                </div>

                                <p>beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire there are many</p>
                            </div>

                            <a href="#" class="do-comment-reply-btn"><i class="pe-7s-back"></i></a>
                        </div>
                    </div>
                    <!--  BLOG COMMENTS END -->

                    <!--  BLOG COMMENTS FORM -->
                    <div class="do-comment-form-wrapper do-blog-single-inner-sec">
                        <h3 class="do-comment-form-title">LEAVE A COMMENT</h3>

                        <form action="#" class="do-comment-form">
                            <input type="text" name="name" id="name" placeholder="Name">
                            <input type="email" name="email" id="email" placeholder="Email">
                            <input type="text" name="website" id="website" placeholder="Web">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                            <input type="submit" value="SEND" class="comment-submit do-btn-round-solid">
                        </form>
                    </div>
                    <!--  BLOG COMMENTS FORM END -->

                </div>
            </div>
            <!-- BLOG SINGLE CONTENT END -->

            <!-- SIDEBAR -->
            <div class="do-blog-sidebar col-md-4 col-sm-4 col-xs-12">
                <!-- CATEGORY WIDGET -->
                <div class="do-blog-sidebar-widget">
                    <h3 class="do-sidebar-widget-title">CATAGORIES</h3>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i> Business &amp; Life
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Recent Deal
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Annual Celebration
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Design
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- CATEGORY WIDGET END -->

                <!-- RECENT POST WIDGET -->
                <div class="do-blog-sidebar-widget">
                    <h3 class="do-sidebar-widget-title">RECENT POSTS</h3>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Competently formulate
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>I am not alone
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Good design
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Pixel perfect code
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>Lets need a break
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- RECENT POST WIDGET END -->

                <!-- TAG CLOUD WIDGET -->
                <div class="do-blog-sidebar-widget do-tag-cloud">
                    <h3 class="do-sidebar-widget-title">TAG CLOUD</h3>

                    <div class="do-tagcloud-wrapper">
                        <a href="#">idEas</a>
                        <a href="#">css</a>
                        <a href="#">code</a>
                        <a href="#">demo</a>
                        <a href="#">php</a>
                        <a href="#">local</a>
                    </div>
                </div>
                <!-- TAG CLOUD WIDGET END -->
            </div>
            <!-- SIDEBAR END -->
        </div>
    </div>
</section>
@endsection