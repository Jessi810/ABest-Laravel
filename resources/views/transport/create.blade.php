@extends(
    'layouts.universal',
    [
        'title' => 'Create',
        'heading_title' => 'Create Package'
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

            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            
            <form action="{{ route('transport.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
        
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" class="form-control" name="source" id="source" placeholder="Source location">
                        </div>
        
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <input type="text" class="form-control" name="destination" id="destination" placeholder="Destination location">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="size[0]">Size (SM)</label>
                            <input type="text" class="form-control" name="size[0]" id="size[0]" placeholder="Size">
                        </div>
        
                        <div class="form-group">
                            <label for="price_1[0]">1-way Price</label>
                            <input type="text" class="form-control" name="price_1[0]" id="price_1[0]" placeholder="Price 1-way">
                        </div>
        
                        <div class="form-group">
                            <label for="price_2[0]">2-way Price</label>
                            <input type="text" class="form-control" name="price_2[0]" id="price_2[0]" placeholder="Price 2-way">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="size[1]">Size (X/XL)</label>
                            <input type="text" class="form-control" name="size[1]" id="size[1]" placeholder="Size">
                        </div>
                    
                        <div class="form-group">
                            <label for="price_1[1]">1-way Price</label>
                            <input type="text" class="form-control" name="price_1[1]" id="price_1[1]" placeholder="Price 1-way">
                        </div>
                    
                        <div class="form-group">
                            <label for="price_2[1]">2-way Price</label>
                            <input type="text" class="form-control" name="price_2[1]" id="price_2[1]" placeholder="Price 2-way">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" name="images[]" multiple />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" />
                </div>
            </form>

        </div>
        <!-- /.container -->
    </div>
@endsection
