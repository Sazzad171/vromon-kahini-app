@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area errorTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-content-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form-wrapper">
                    <div class="cform-top-text">
                        <h4>Please, feel yourself comfortable to fill in our contact form</h4>
                    </div>
                    <div class="cf-msg"></div>
                    <form method="post" action="assets/php/mail.php" id="cf">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                        placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subjectName" name="subjectName"
                                        placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="msg" name="msg" placeholder="Message"
                                        rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection