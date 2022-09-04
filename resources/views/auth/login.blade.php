@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area errorTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Login</h2>
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
                        <h4>Login to your account here!</h4>
                    </div>
                    <div class="cf-msg"></div>
                    <form method="post" action="{{ route('authenticate') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email" value="{{ old('name') }}">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Password">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <p class="mb-4">
                            <a href="{{ route('register') }}" class="text-danger">Not register yet? Register here.</a>
                        </p>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection