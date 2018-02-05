@extends(
    'layouts.universal',
    [
        'title' => 'Contact',
        'heading_title' => 'Contact'
    ]
)

@section('head')
@endsection

@section('script')
@endsection

@section('content')
    <div id="content">
        <div class="container">
            
            <table class="table">
                <tr>
                    <td><i class="fa fa-location-arrow"></i> Business Address</td>
                    <td>
                        240 Skyview Ranch Rd NE<br>
                        Calgary, AB T3N 0P4
                    </td>
                </tr>
                <tr>
                    <td><i class="fa fa-phone"></i> Contact No.</td>
                    <td>+1 587 500 0888</td>
                </tr>
                <tr>
                    <td><i class="fa fa-envelope"></i> Email address</td>
                    <td><a href="mailto:info@abesttransport.com">info@abesttransport.com</a></td>
                </tr>
                <tr>
                    <td><i class="fa fa-globe"></i> Website</td>
                    <td><a href="www.abesttransport.com">www.abesttransport.com</a></td>
                </tr>
            </table>

        </div>
        <!-- /.container -->
    </div>
@endsection
