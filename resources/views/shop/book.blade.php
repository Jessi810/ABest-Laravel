@extends(
    'layouts.universal',
    [
        'title' => 'Book',
        'heading_title' => $transport->name
    ]
)

@section('head')
@endsection

@section('script')
<script>
    $('#navbar-package').addClass('active');
</script>
@endsection

@section('content')
    <div id="content">
        <div class="container">

            <div class="row">
                <div class=""></div>
            </div>

            <div class="box social" id="product-social">
                <h4>Show it to your friends</h4>
                <p>
                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </p>
            </div>

        </div>
        <!-- /.container -->
    </div>
@endsection
