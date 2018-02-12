@extends(
    'layouts.universal',
    [
        'title' => 'Dashboard',
        'heading_title' => 'Admin Dashboard'
    ]
)

@section('head')
@endsection

@section('script')
@endsection

@section('content')
    <div id="content">

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row showcase">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i></div>
                            <h4><span class="counter">{{ $count_transports }}</span><br>
                                Packages
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i></div>
                            <h4><span class="counter">{{ $count_users }}</span><br>
                                Users
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i></div>
                            <h4><span class="counter">{{ $count_recent_bookings }}</span><br>
                                Bookings (last 7 days)
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i></div>
                            <h4><span class="counter">{{ $count_total_bookings }}</span><br>
                                Bookings (total)
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
            
    </div>
@endsection
