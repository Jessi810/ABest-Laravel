@extends(
    'layouts.universal',
    [
        'title' => 'Shop',
        'heading_title' => $transport->name
    ]
)

@section('head')
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("#navbar-package").addClass("active");

        $(document).on('click', '#submitButton', function() {
            var form = $('#bookingForm');

            $.ajax({
                url     : form.attr("action"),
                method  : form.attr("method"),
                data    : form.serialize(),
                success : function(response) {
                    console.log(response);
                    $("#errorMessageBox").addClass("hidden");
                    $("#bookingForm").empty();
                    $("#bookingForm").append("<div class='alert alert-info'><strong>Thank you!</strong><br>Your request will be processed shortly. Check your email later for additional details.</div>");
                },
                error   : function(response) {
                    if (response.status === 422)
                    {
                        $("#errorMessageBox > ul").empty();
                        $("#errorMessageBox").removeClass("hidden");

                        var errors = response.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $("#errorMessageBox > ul").append("<li>" + value[0] + "</li>");
                        });
                    }
                }
            });
        });
    });
</script>
@endsection

@section('content')
    <div id="content">
        <div class="container">

            <div class="row" id="productMain">
                <div class="col-sm-6">
                    <div id="mainImage">
                        @foreach($transport->images as $image)
                            <img src="{{ asset($image->path.'/'.$image->filename) }}" alt="" class="img-responsive">
                            @break
                        @endforeach
                    </div>

                    {{--  <div class="ribbon sale">
                        <div class="theribbon">SALE</div>
                        <div class="ribbon-background"></div>
                    </div>  --}}
                    <!-- /.ribbon -->

                    {{--  <div class="ribbon new">
                        <div class="theribbon">NEW</div>
                        <div class="ribbon-background"></div>
                    </div>  --}}
                    <!-- /.ribbon -->

                </div>
                <div class="col-sm-6">
                    <div class="box">

                        <form>
                            {{--  <div class="sizes">

                                <h3>Available sizes</h3>

                                <label for="size_s">
                                    <a href="#">S</a>
                                    <input type="radio" id="size_s" name="size" value="s" class="size-input">
                                </label>
                                <label for="size_m">
                                    <a href="#">M</a>
                                    <input type="radio" id="size_m" name="size" value="m" class="size-input">
                                </label>
                                <label for="size_l">
                                    <a href="#">L</a>
                                    <input type="radio" id="size_l" name="size" value="l" class="size-input">
                                </label>

                            </div>  --}}    

                            <p class="price">Starting at CA${{ $transport->packages->min('price_1') }}</p>

                            <p class="text-center">
                                {{--  <a href="{{ route('shop.book', ['id' => $transport->id]) }}" type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Book Now!</a>  --}}
                                {{--  <a href="{{ route('shop.item', ['id' => $transport->id]) }}#bookingHead" type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Book Now!</a>  --}}
                                {{--  <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                </button>  --}}
                            </p>

                        </form>
                    </div>

                    <div class="row" id="thumbs">
                        @foreach($transport->images as $image)
                            <div class="col-xs-4" style="min-height: 120px; max-height: 120px; overflow: hidden;">
                                <a href="{{ asset($image->path.'/'.$image->filename) }}" class="thumb">
                                    <img src="{{ asset($image->path.'/'.$image->filename) }}" alt="" class="img-responsive" style="width: 100%; height: 100%;">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

                        <div class="col-md-6">
                            <h4>Book Now!</h4>
                            <form id="bookingForm" action="{{ route('shop.booking', ['id' => $transport->id]) }}" method="post">
                                {{ csrf_field() }}

                                <div id="errorMessageBox" class="alert alert-danger hidden">
                                    <ul></ul>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Your name">
                                        </div>
                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea type="" class="form-control" rows="4" name="message" id="message" placeholder="Message">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-sm-12 text-center">
                                    <button type="button" id="submitButton" class="btn btn-template-main"><i class="fa fa-plane"></i> Book It</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{--  <h4>Product details</h4>
                    <table class="table table-bordered">
                        <thead>
                            <th></th>
                            @foreach($transport->packages as $package)
                                <th>{{ $package->size }} maximum person</th>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr>
                                <th>1-way</th>
                                @foreach($transport->packages as $package)
                                    <td>${{ $package->price_1 }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>2-way</th>
                                @foreach($transport->packages as $package)
                                    <td>${{ $package->price_2 }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                    <hr><br>

                    <h4>Book Now!</h4>
                    <form action="{{ route('transport.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                </div>
                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <input type="submit" class="btn" />
                        </div>
                    </form>  --}}
                </p>
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
