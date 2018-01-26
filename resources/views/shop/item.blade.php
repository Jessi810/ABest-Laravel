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
@endsection

@section('content')
    <div id="content">
        <div class="container">

            <div class="row" id="productMain">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <img src="img/detailbig1.jpg" alt="" class="img-responsive">
                    </div>

                    <div class="ribbon sale">
                        <div class="theribbon">SALE</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->

                    <div class="ribbon new">
                        <div class="theribbon">NEW</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->

                </div>
                <div class="col-sm-6">
                    <div class="box">

                        <form>
                            <div class="sizes">

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

                            </div>

                            <p class="price">${{ $transport->packages->min('price_1') }} - ${{ $transport->packages->max('price_2') }}</p>

                            <p class="text-center">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                </button>
                            </p>

                        </form>
                    </div>

                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a href="img/detailbig1.jpg" class="thumb">
                                <img src="img/detailsquare.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="img/detailbig2.jpg" class="thumb">
                                <img src="img/detailsquare2.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="img/detailbig3.jpg" class="thumb">
                                <img src="img/detailsquare3.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="box" id="details">
                <p>
                    <h4>Product details</h4>
                    <table class="table table-bordered">
                        <thead>
                            <th></th>
                            @foreach($transport->packages as $package)
                                <th>{{ $package->size }}</th>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr>
                                <th>1-way</th>
                                @foreach($transport->packages as $package)
                                    <td>{{ $package->price_1 }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>2-way</th>
                                @foreach($transport->packages as $package)
                                    <td>{{ $package->price_2 }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
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
