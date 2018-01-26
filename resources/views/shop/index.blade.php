@extends(
    'layouts.universal',
    [
        'title' => 'Shop',
        'heading_title' => 'Shop Package'
    ]
)

@section('head')
@endsection

@section('script')
@endsection

@section('content')
    <div id="content">
        <div class="container">
            <p class="text-muted lead text-center">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>

            <div class="row products">

                <div class="col-md-3 col-sm-4">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product1.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                            <p class="price">$143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>

            </div>
            <!-- /.products -->

            <div class="col-sm-12">

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

            </div>
            <!-- /.col-sm-12 -->

        </div>
        <!-- /.container -->
    </div>
@endsection
