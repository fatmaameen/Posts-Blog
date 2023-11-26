<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/KrypLab/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 18:21:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="KrypLab is a modern and elegant landing page, build for ICO Agencies and digital bitcoin & crypto currency investment website.">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="link_assets/img/favicon.html">

    <title>KrypLab - Bitcoin & Cryptocurrency Landing Page Template</title>

    <!--google fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

    <!--common style-->
    <link href="{{ URL::assets('link_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::assets('link_assets/vendor/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">
    <link href=" {{ URL::assets('link_assets/vendor/bicon/css/bicon.min.css') }}" rel="stylesheet">
    <link href="{{ URL::assets('link_assets/vendor/animate.css') }}  " rel="stylesheet">
    <link href=" {{ URL::assets('link_assets/vendor/owl/link_assets/owl.carousel.min.css') }}    " rel="stylesheet">
    <link href="{{ URL::assets('link_assets/vendor/magnific-popup/magnific-popup.css') }}    link_assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!--custom css-->
    <link href="{{URL::assets('link_assets/css/main.css')  }}" rel="stylesheet">

</head>
<body class="">

<!--header start-->
<header class="app-header navbar-purple">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md" id="mainNav">
                    <!--logo-->
                    <a class="navbar-brand mr-5" href="#">
                        <img class="" src="{{ URL::assetes('link_assets/img/logo2.png') }}" srcset="{{ URL::assets('link_assets/img/logo2@2x.png 2x') }}" alt=""/>
                    </a>
                    <!--logo-->

                    <!--responsive toggle icon-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-bars"> </i>
                        </span>
                    </button>
                    <!--responsive toggle icon-->

                    <!--nav link-->
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="landing-1-light.html#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="landing-1-light.html#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="landing-1-light.html#token">Token</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="landing-1-light.html#roadmap">Roadmap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="landing-1-light.html#ico">Why ICO</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    More
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item js-scroll-trigger" href="landing-1-light.html#team">Team</a>
                                    <a class="dropdown-item js-scroll-trigger" href="landing-1-light.html#how_works">How it Works</a>
                                    <a class="dropdown-item js-scroll-trigger" href="landing-1-light.html#contact">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="blog-list.html">Blog Post</a>
                                    <a class="dropdown-item" href="blog-single.html">Blog Post Single</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-pill buy-token js-scroll-trigger" href="#buytoken">Buy token</a>
                            </li>
                        </ul>
                    </div>
                    <!--nav link-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!--header end-->

<!--banner start-->
<div class="hero-banner creative-banner blog-banner text-center" id="home">
    <div class="hero-text ">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <h1 class="hero-title text-light mb-0" >Blog Post</h1>
                </div>

            </div>
        </div>
    </div>
</div>
<!--banner end-->

<!--section start-->

<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pr-lg-5 pb-5">

                <article class="blog-post">
                    <header class="blog-post-header mb-4">
                        <a href="#">
                            <img src="{{ URL::assets('link_assets/img/b1.jpg') }}" class="" alt="">
                        </a>
                    </header>
                    <h2>
                        <a href="#" class="">
                            This is a standard post with preview image
                        </a>
                    </h2>
                    <div class="d-flex mb-3 post-meta">
                        <span class="post-date pr-3">Author: <a href="#">John Doe</a></span>
                        <span class="post-date border border-top-0 border-bottom-0 px-3">June 10, 2018</span>
                        <a href="#">
                            <span class="d-flex align-items-center px-3"><i class="fa fa-comments-o text-3 mr-1" aria-label="4 users comment this post"></i> 4</span>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus vestibulum lacus non sodales. Aenean pretium augue tellus, dapibus molestie sapien vestibulum venenatis. Curabitur eulr...</p>
                    <a href="#" class="view-link">Read More</a>
                </article>

                <hr class="my-5">

                <article class="blog-post">
                    <header class="blog-post-header mb-4">
                        <div class="owl-carousel owl-theme js_post_carousel">
                            <div>
                                <a href="#">
                                    <img src="{{ URL::assets('link_assets/img/b2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src=" {{ URL::assets('link_assets/img/b3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src=" {{ URL::assets('link_assets/img/b1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </header>
                    <h2>
                        <a href="#" class="">
                            This is a gallery image post
                        </a>
                    </h2>
                    <div class="d-flex mb-3 post-meta">
                        <span class="post-date pr-3">Author: <a href="#">John Doe</a></span>
                        <span class="post-date border border-top-0 border-bottom-0 px-3">June 10, 2018</span>
                        <a href="#">
                            <span class="d-flex align-items-center px-3"><i class="fa fa-comments-o text-3 mr-1" aria-label="4 users comment this post"></i> 4</span>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus vestibulum lacus non sodales. Aenean pretium augue tellus, dapibus molestie sapien vestibulum venenatis. Curabitur eulr...</p>
                    <a href="#" class="view-link">Read More</a>
                </article>

                <hr class="my-5">

                <article class="blog-post">
                    <header class="blog-post-header mb-4">
                        <div class="video-fit">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/L9r1M0MxcqA" allowfullscreen></iframe>
                        </div>
                    </header>
                    <h2>
                        <a href="#" class="">
                            This is a video post
                        </a>
                    </h2>
                    <div class="d-flex mb-3 post-meta">
                        <span class="post-date pr-3">Author: <a href="#">John Doe</a></span>
                        <span class="post-date border border-top-0 border-bottom-0 px-3">June 10, 2018</span>
                        <a href="#">
                            <span class="d-flex align-items-center px-3"><i class="fa fa-comments-o text-3 mr-1" aria-label="4 users comment this post"></i> 4</span>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus vestibulum lacus non sodales. Aenean pretium augue tellus, dapibus molestie sapien vestibulum venenatis. Curabitur eulr...</p>
                    <a href="#" class="view-link">Read More</a>
                </article>

                <hr class="my-5">

                <article class="blog-post">
                    <header class="blog-post-header mb-4">
                        <div class="audio-fit">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true"></iframe>
                        </div>
                    </header>
                    <h2>
                        <a href="#" class="">
                            This is a audio post
                        </a>
                    </h2>
                    <div class="d-flex mb-3 post-meta">
                        <span class="post-date pr-3">Author: <a href="#">John Doe</a></span>
                        <span class="post-date border border-top-0 border-bottom-0 px-3">June 10, 2018</span>
                        <a href="#">
                            <span class="d-flex align-items-center px-3"><i class="fa fa-comments-o text-3 mr-1" aria-label="4 users comment this post"></i> 4</span>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus vestibulum lacus non sodales. Aenean pretium augue tellus, dapibus molestie sapien vestibulum venenatis. Curabitur eulr...</p>
                    <a href="#" class="view-link">Read More</a>
                </article>

                <hr class="my-5">

                <article class="blog-post">
                    <header class="blog-post-header bg-light p-5 mb-4">
                        <blockquote class="blockquote blockquote-custom">
                            <p class="mb-4 font-tertiary font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla gravida ipsum a est iaculis, sit amet ullamcorper odio egestas.</p>
                        </blockquote>
                    </header>
                    <h2>
                        <a href="#" class="">
                            This is a blockquote post
                        </a>
                    </h2>
                    <div class="d-flex mb-3 post-meta">
                        <span class="post-date pr-3">Author: <a href="#">John Doe</a></span>
                        <span class="post-date border border-top-0 border-bottom-0 px-3">June 10, 2018</span>
                        <a href="#">
                            <span class="d-flex align-items-center px-3"><i class="fa fa-comments-o text-3 mr-1" aria-label="4 users comment this post"></i> 4</span>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam finibus vestibulum lacus non sodales. Aenean pretium augue tellus, dapibus molestie sapien vestibulum venenatis. Curabitur eulr...</p>
                    <a href="#" class="view-link">Read More</a>
                </article>

                <hr class="my-5">

                <div class="text-center">
                    <ul class="custom-pagination">
                        <li><a href="#">Prev</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <div class="widget">
                    <form class="form-inline" role="form">
                        <div class="search-row">
                            <button class="search-btn" type="submit" title="Search">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="widget">
                    <div class="widget-title">
                        <h3>Categories</h3>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Audio</a>
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                        </li>
                        <li>
                            <a href="#">Image</a>
                        </li>
                        <li>
                            <a href="#">Uncategorized</a>
                        </li>
                        <li>
                            <a href="#">Video</a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        <h3>Tags</h3>
                    </div>
                    <div class="tagcloud">
                        <a href="#">coupon</a>
                        <a href="#">deals</a>
                        <a href="#">discount</a>
                        <a href="#">envato</a>
                        <a href="#">gallery</a>
                        <a href="#">sale</a>
                        <a href="#">shop</a>
                        <a href="#">store</a>
                        <a href="#">video</a>
                        <a href="#">youtube</a>
                    </div>
                </div>


                <div class="widget">
                    <div class="widget-title">
                        <h3>Meta</h3>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Entries RSS</a>
                        </li>
                        <li>
                            <a href="#">Comments RSS</a>
                        </li>
                        <li>
                            <a href="#">WordPress.org</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>



<!--section end-->

<!--footer start-->
<footer class="app-footer">
    <div class="primary-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 " >
                    <h4 class="text-uppercase">KrypLab</h4>
                    <p>Subscribe to our newsletter to receive news, updates, free stuff and new releases by email. We don't do spam.</p>
                    <p class="copyright">&copy; Copyright 2018 VectorLab, Inc.™</p>
                </div>
                <div class="col-md-4 mb-md-0 mb-3 " >
                    <h6 class="text-uppercase">Resources</h6>
                    <ul class="list-unstyled">
                        <li><a href="javascript:;">Free schedules</a></li>
                        <li><a href="javascript:;">terms & privacy</a></li>
                        <li><a href="javascript:;">api reference</a></li>
                        <li><a href="javascript:;">help desk</a></li>
                    </ul>
                </div>
                <div class="col-md-4 " >
                    <h6 class="text-uppercase">About & Contacts</h6>
                    <ul class="list-unstyled">
                        <li><a href="javascript:;">Our Vision</a></li>
                        <li><a href="javascript:;">Features</a></li>
                        <li><a href="javascript:;">About Us</a></li>
                        <li><a href="javascript:;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-footer text-md-left text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-3">
                    <div class="payment-cards ">
                        <img src="{{ URL::assets('link_assets/img/fc1.png') }}" alt=""/>
                        <img src=" {{ URL::assets('link_assets/img/fc2.png') }}" alt=""/>
                        <img src="{{ URL::assets('link_assets/img/fc3.png') }}" alt=""/>
                        <img src="{{ URL::assets('link_assets/img/fc4.png') }}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6 text-md-right " >
                    <div class="float-md-right  mb-md-0 mb-3">
                        <span class="sm-txt pr-2">Language:</span>
                        <div class="btn-group ">
                            <button type="button" class="btn-language dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">English</button>
                                <button class="dropdown-item" type="button">French</button>
                                <button class="dropdown-item" type="button">Chinese</button>
                            </div>
                        </div>
                    </div>

                    <div class="social-links float-md-right">
                        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:;"><i class="fa fa-bitcoin"></i></a>
                        <a href="javascript:;"><i class="fa fa-youtube"></i></a>
                        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!--js initialized-->
<script src="{{ URL::assets('link_assets/vendor/jquery/jquery.min.js') }}"></script>
<script src=" {{ URL::assets('link_assets/vendor/popper.min.js') }}"></script>
<script src=" {{ URL::assets('link_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::assets('link_assets/vendor/wow.min.js') }}"></script>
<script src="{{ URL::assets('link_assets/vendor/jquery.easing.min.js') }}"></script>
<script src="{{ URL::assets('link_assets/vendor/owl/owl.carousel.min.js') }}"></script>
<script src="{{ URL::assets('link_assets/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::assets('link_assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!--<script src="link_assets/vendor/particles/particles.js"></script>-->
<!--<script src="link_assets/vendor/particles/init-particles.js"></script>-->

<!--contact form-->
<script type="text/javascript" src="{{ URL::assets('link_assets/vendor/contact-form/form-validator.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::assets('link_assets/vendor/contact-form/contact-form-script.js') }}"></script>

<!--init scripts-->
<script src="{{ URL::assets('link_assets/js/scripts.js') }}"></script>

</body>

<!-- Mirrored from thevectorlab.net/KrypLab/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 18:21:05 GMT -->
</html>

