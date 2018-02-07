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
<script>
    $('#navbar-contact').addClass('active');
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

                        <form action="{{ route('contact.message') }}" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Send message</button>
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
@endsection
