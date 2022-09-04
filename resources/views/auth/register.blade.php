@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area errorTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Signup</h2>
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
                        <h4>Please, signup here!</h4>
                    </div>
                    <div class="cf-msg"></div>
                    <form method="post" action="{{ route('userCreate') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email">
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
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Confirm Password">
                                </div>
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <p class="mb-4">
                            <a href="{{ route('login') }}" class="text-danger">Already registered? Login here.</a>
                        </p>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection