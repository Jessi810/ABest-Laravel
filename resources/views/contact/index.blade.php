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
<!-- gmaps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="{{ asset('js/gmaps.js') }}"></script>
<script src="{{ asset('js/gmaps.init.js') }}"></script>

<script>
    $('#navbar-contact').addClass('active');

    $(document).ready(function() {
        $(document).on('click', '#submitButton', function() {
            var form = $('#contactForm');

            $.ajax({
                url     : form.attr("action"),
                method  : form.attr("method"),
                data    : form.serialize(),
                success : function(response) {
                    console.log(response);
                    $("#errorMessageBox").addClass("hidden");
                    $("#contactForm").empty();
                    $("#contactForm").append("<div class='alert alert-info'><strong>Thank you!</strong><br>Your request will be processed shortly. Check your email later for answer to your inquiry.</div>");
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
    })
</script>
@endsection

@section('content')
<div id="content">
    <div class="container" id="contact">

        <div class="row">
            <div class="col-md-8">

                <section>

                    <div class="heading">
                        <h2>We are here to help you</h2>
                    </div>

                    <p class="lead">
                        Do you have questions or want to clarify something? Reach to us through by call or by sending an email to us. You can also inquire through the form below.
                    </p>
                    <p>
                        Please feel free to contact us, our customer service center is working for you 24/7.
                    </p>

                    <div class="heading">
                        <h3>Contact form</h3>
                    </div>

                    <form id="contactForm" action="{{ route('contact.message') }}" method="POST">
                        {{ csrf_field() }}

                        <div id="errorMessageBox" class="alert alert-danger hidden">
                            <ul></ul>
                        </div>

                        {{--  @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif  --}}
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" value="{{ old('firstname') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control">{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button type="button" id="submitButton" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Send message</button>
                            </div>
                        </div>
                        <!-- /.row -->
                    </form>

                </section>

            </div>

            <div class="col-md-4">

                <section>

                    <h3 class="text-uppercase">Address</h3>
                    
                    <p>
                        <strong>ABest Transport and Tour Services Inc. </strong>
                        <br>240 Skyview Ranch Rd NE 
                        <br>Calgary, AB T3N 0P4
                        <br>Canada
                    </p>

                    <h3 class="text-uppercase">Call Us</h3>

                    <p class="text-muted">
                        You can reach us through this number.
                    </p>
                    <p>
                        <strong>+1 587 500 0888</strong>
                    </p>
                    <h4>
                        <strong>TOLL FREE: </strong>
                    </h4>
                    <h4>
                        <strong>1-855-GoABest</strong>
                    </h4>



                    <h3 class="text-uppercase">Electronic support</h3>

                    <p class="text-muted">Please feel free to write an email to us.</p>
                    <ul>
                        <li><strong><a href="mailto:info@abesttransport.com">info@abesttransport.com</a></strong>
                        </li>
                    </ul>

                </section>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /#contact.container -->
</div>
<!-- /#content -->

<!--<div id="map">
</div>-->
@endsection
