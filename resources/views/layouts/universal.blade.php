<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ !empty($title) ? $title.' | ABest' : 'ABest' }}</title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- CSS animations  -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        <!-- Theme stylesheet, if possible do not edit this stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-touch-icon-152x152.png') }}" />

        @yield('head')
    </head>

    <body>

        <div id="all">

            <header>

                <!-- *** TOP *** _________________________________________________________ -->
                <div id="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-5 contact">
                                <p class="hidden-sm hidden-xs">Contact us on <font color="#f48342">+1 587 500 0888</font> or <a href="mailto:info@abesttransport.com" style="color: #f48342;">info@abesttransport.com</font></p>
                                <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                            <div class="col-xs-7">
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>

                                <div class="login">
                                    @if (Auth::check())
                                        
                                    @else
                                        <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                        <a href="{{ route('register') }}"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- *** TOP END *** -->

                <!-- *** NAVBAR *** _________________________________________________________ -->
                <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
                    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                        <div class="container">

                            <div class="navbar-header">
                                <a class="navbar-brand home" href="index.html">
                                    <img src="{{ asset('img/logo.png') }}" alt="Universal logo" class="hidden-xs hidden-sm">
                                    <img src="{{ asset('img/logo-small.png') }}" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                                </a>
                                <div class="navbar-buttons">
                                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                        <span class="sr-only">Toggle navigation</span>
                                        <i class="fa fa-align-justify"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/.navbar-header -->

                            <div class="navbar-collapse collapse" id="navigation">
                                <ul class="nav navbar-nav navbar-right">
                                    <li id="navbar-home" class="">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li id="navbar-package" class="">
                                        <a href="{{ route('shop.index') }}">Packages</a>
                                    </li>
                                    <li id="navbar-reservation" class="">
                                        <a href="#">Reservation</a>
                                    </li>
                                    <li id="navbar-contact" class="">
                                        <a href="{{ route('contact.index') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->

                            <div class="collapse clearfix" id="search">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <!--/.nav-collapse -->

                        </div>
                    </div>
                    <!-- /#navbar -->
                </div>
                <!-- *** NAVBAR END *** -->

            </header>

            @if(!empty($heading_title))
                <div id="heading-breadcrumbs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h1>{{ $heading_title or '' }}</h1>
                            </div>
                            {{--  <div class="col-md-5">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li>Category full</li>
                                </ul>
        
                            </div>  --}}
                        </div>
                    </div>
                </div>
            @endif

            @yield('content')

            <!-- *** GET IT *** _________________________________________________________ -->
            <div id="get-it">
                <div class="container">
                    <div class="col-md-8 col-sm-12">
                        <h3>Do you want cool website like this one?</h3>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
                    </div>
                </div>
            </div>
            <!-- *** GET IT END *** -->

            <!-- *** FOOTER *** _________________________________________________________ -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-3 col-sm-6">
                        <h4>About us</h4>

                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <hr>

                        <h4>Join our monthly newsletter</h4>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                            <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                        </span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Blog</h4>

                        <div class="blog-entries">
                            <div class="item same-height-row clearfix">
                                <div class="image same-height-always">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('img/detailsquare.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="name same-height-always">
                                    <h5><a href="#">Blog post name</a></h5>
                                </div>
                            </div>

                            <div class="item same-height-row clearfix">
                                <div class="image same-height-always">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('img/detailsquare.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="name same-height-always">
                                    <h5><a href="#">Blog post name</a></h5>
                                </div>
                            </div>

                            <div class="item same-height-row clearfix">
                                <div class="image same-height-always">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('img/detailsquare.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="name same-height-always">
                                    <h5><a href="#">Very very long blog post name</a></h5>
                                </div>
                            </div>
                        </div>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Contact</h4>

                        <p>
                            <strong>ABest Transport and Tour Services Inc.</strong>
                            <br>240 Skyview Ranch Rd NE
                            <br>Calgary, AB T3N 0P4
                            <br><strong>Contact No,</strong>
                            <br>+1 587 500 0888
                            <br><strong>Email</strong>
                            <br>info@abesttransport.com
                            <br>
                        </p>

                        <a href="contact" class="btn btn-small btn-template-main">Go to contact page</a>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Photostream</h4>

                        <div class="photostream">
                            <div>
                                <a href="#">
                                    <img src="{{ asset('img/detailsquare.jpg') }}" class="img-responsive" alt="#">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="{{ asset('img/detailsquare2.jpg') }}" class="img-responsive" alt="#">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="{{ asset('img/detailsquare3.jpg') }}" class="img-responsive" alt="#">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="{{ asset('img/detailsquare3.jpg') }}" class="img-responsive" alt="#">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="{{ asset('img/detailsquare2.jpg') }}" class="img-responsive" alt="#">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="{{ asset('img/detailsquare.jpg') }}" class="img-responsive" alt="#">
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.container -->
            </footer>
            <!-- *** FOOTER END *** -->

            <!-- *** COPYRIGHT *** _________________________________________________________ -->
            <div id="copyright">
                <div class="container">
                    <div class="col-md-12">
                        <p class="pull-left">&copy; 2018 ABest Transport Service</p>
                        <p class="pull-right">Template by <a href="https://bootstrapious.com">Bootstrapious</a> & <a href="https://fity.cz">Fity.cz</a>
                            <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                        </p>

                    </div>
                </div>
            </div>
            <!-- *** COPYRIGHT END *** -->
        </div>
        <!-- /#all -->

        <!-- #### JAVASCRIPT FILES ### -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="{{ asset('js/jquery-1.11.0.min.js') }}"><\/script>')
        </script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/jquery.cookie.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <script src="{{ asset('js/front.js') }}"></script>

        @yield('script')
    </body>

</html>