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
                                        <h1>Welcome</h1>
                                        <p>ABest transport and tour services incorporated
                                            <br />official website</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="img/abestlogo.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">

                                    <div class="col-sm-7 text-center">
                                        <img class="img-responsive" src="img/transport/2/downtown3.jpg" alt="">
                                    </div>

                                    <div class="col-sm-5">
                                        <h2>TOLL FREE:</h2>
                                        <ul class="list-style-none">
                                            <li>1-855-Go-ABest</li>
                                            <!--  <li>4 Header variations</li>
                                            <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                            <li>+ 11 extra pages showing template features</li> -->
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 right">
                                        <h1>Services Offered</h1>
                                        <ul class="list-style-none">
                                            <li>YYC airport to Downtown Starting @35</li>
                                            <li>YYC to Banff/Lake Louis starting @ 200</li>
                                            <li>YYC to Drumheller starting @ 150</li>
                                            <li>YYC to Other Alberta Destination Please Contact US for Quote</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="img/transport/2/downtown4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="img/transport/3/banff4.jpg" alt="">
                                    </div>
                                    <!--<div class="col-sm-5">
                                        <h1>Find us on</h1>
                                        <ul class="list-style-none">
                                            <li>ABest Transport and Tour Services Inc. </li>
                                            <li>240 Skyview Ranch Rd NE </li>
                                            <li>Calgary, AB T3N 0P4  </li>
                                            <li>Canada </li>
                                        </ul>
                                    </div>-->
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
                               Experience the genuine hospitality and excellent customer service of our <strong>friendly and expert drivers and travel guides</strong> as you go around.
                            </p>
    
                            {{--  <p><a href="#" class="btn btn-template-main">Read more</a>
                            </p>  --}}
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="img/transport/1/drumheller3.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="bar no-mb color-white padding-big text-center-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="img/transport/3/banff4.jpg" alt="" class="img-responsive">
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
                                You are guaranteed with Reasonable rates so there’s no need to worry about overpriced transportation fees. What’s more, you get the customized sightseeing opportunities and go to your chosen tourist destinations at your own pace with the help of our own drivers. <strong>“Our Travel, Your Choice.”</strong>
                            </p>
    
                            {{--  <p><a href="#" class="btn btn-template-main">Browse Now!</a>
                            </p>  --}}
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="img/transport/3/banff5.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
