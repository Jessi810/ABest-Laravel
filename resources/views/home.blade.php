@extends('layouts.universal', ['title' => 'Home'])

@section('head')
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
@endsection

@section('script')
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('#navbar-home').addClass('active');
    </script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <section>
                <!-- *** HOMEPAGE CAROUSEL *** _________________________________________________________ -->
                <div class="home-carousel">

                    <div class="dark-mask"></div>

                    <div class="container">
                        <div class="homepage owl-carousel">
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 right">
                                        <p>
                                            <img src="img/logo.png" alt="">
                                        </p>
                                        <h1>Multipurpose responsive theme</h1>
                                        <p>Business. Corporate. Agency.
                                            <br />Portfolio. Blog. E-commerce.</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="img/template-homepage.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">

                                    <div class="col-sm-7 text-center">
                                        <img class="img-responsive" src="img/template-mac.png" alt="">
                                    </div>

                                    <div class="col-sm-5">
                                        <h2>46 HTML pages full of features</h2>
                                        <ul class="list-style-none">
                                            <li>Sliders and carousels</li>
                                            <li>4 Header variations</li>
                                            <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                            <li>+ 11 extra pages showing template features</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 right">
                                        <h1>Design</h1>
                                        <ul class="list-style-none">
                                            <li>Clean and elegant design</li>
                                            <li>Full width and boxed mode</li>
                                            <li>Easily readable Roboto font and awesome icons</li>
                                            <li>7 preprepared colour variations</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="img/template-easy-customize.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="img/template-easy-code.png" alt="">
                                    </div>
                                    <div class="col-sm-5">
                                        <h1>Easy to customize</h1>
                                        <ul class="list-style-none">
                                            <li>7 preprepared colour variations.</li>
                                            <li>Easily to change fonts</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.project owl-slider -->
                    </div>
                </div>
                <!-- *** HOMEPAGE CAROUSEL END *** -->
            </section>

            <section class="bar background-gray no-mb padding-big text-center-sm" style="margin-top: -40px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-uppercase">Welcome!</h2>
                            {{--  <p class="lead mb-small">40+ prepared HTML templates</p>  --}}
                            <p class="lead mb-small">
                                Welcome to Calgary, Alberta! Experience the genuine hospitality and excellent customer service of our <strong>friendly and expert drivers and travel guides</strong> as you go around.
                            </p>
    
                            {{--  <p><a href="#" class="btn btn-template-main">Read more</a>
                            </p>  --}}
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="img/template-easy-customize.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="bar no-mb color-white padding-big text-center-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="img/template-easy-code.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-uppercase">Services like no other</h2>
                            <p class="lead mb-small">
                                We offer <strong>customized transport services</strong> like no other. As travelers ourselves, we wish to offer an optimum travel experience without spending much for tours and transportation to guarantee a hassle-free Canada travel experience.
                            </p>
                            {{--  <p class="mb-small">
                                
                            </p>  --}}
    
                            {{--  <p><a href="#" class="btn btn-template-transparent-primary">Read more</a>
                            </p>  --}}
                        </div>
                    </div>
                </div>
            </section>

            <section class="bar background-gray no-mb padding-big text-center-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-uppercase">Excellent Prices</h2>
                            {{--  <p class="lead mb-small">40+ prepared HTML templates</p>  --}}
                            <p class="lead mb-small">
                                You are guaranteed with Uber transportation rates so there’s no need to worry about overpriced transportation fees. What’s more, you get the customized sightseeing opportunities and go to your chosen tourist destinations at your own pace with the help of our own drivers. <strong>“Our Travel, Your Choice.”</strong>
                            </p>
    
                            {{--  <p><a href="#" class="btn btn-template-main">Browse Now!</a>
                            </p>  --}}
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="img/template-easy-customize.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
