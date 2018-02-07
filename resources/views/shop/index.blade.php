@extends(
    'layouts.universal',
    [
        'title' => 'Shop',
        'heading_title' => 'Travels'
    ]
)

@section('head')
@endsection

@section('script')
@endsection

@section('content')
    <div id="content">
        <div class="container">
            <div class="row products">

                @foreach($transports as $transport)
                    <div class="col-md-4 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="{{ route('shop.item', ['id' => $transport->id]) }}">
                                    @foreach($transport->images as $image)
                                        <img src="{{ asset($image->path.'/'.$image->filename) }}" alt="" class="img-responsive image1">
                                        @break
                                    @endforeach
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="{{ route('shop.item', ['id' => $transport->id]) }}">{{ $transport->name }}</a></h3>
                                <p class="price">
                                    CA$ {{ $transport->packages->min('price_1') }}
                                </p>
                                <p class="buttons">
                                    <a href="{{ route('shop.item', ['id' => $transport->id]) }}" class="btn btn-default">View detail</a>
                                    <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                @endforeach

            </div>
            <!-- /.products -->

            {{--  <div class="col-sm-12">

                <div class="banner">
                    <a href="#">
                        <img src="img/banner2.jpg" alt="" class="img-responsive">
                    </a>
                </div>

                <div class="pages">

                    <p class="loadMore">
                        <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p>

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a>
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
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>

            </div>  --}}
            <!-- /.col-sm-12 -->

        </div>
        <!-- /.container -->
    </div>
@endsection
