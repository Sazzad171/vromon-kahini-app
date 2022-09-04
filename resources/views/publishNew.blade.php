@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area errorTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Add New Story</h2>
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
                        <h4>Please, add new story here</h4>
                    </div>
                    <div class="cf-msg"></div>
                    <form method="post" action="{{ route('newStory') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="story_heading" value="{{ old('story_heading') }}"
                                        placeholder="Story heading...">
                                    @error('story_heading')
                                    <p class="text-danger text-left">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="location" value="{{ old('location') }}"
                                        placeholder="Location...">
                                    @error('location')
                                    <p class="text-danger text-left">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                    <p class="text-danger text-left">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="details" placeholder="Story Details Here..."
                                        rows="3">{{ old('details') }}</textarea>
                                    @error('details')
                                        <p class="text-danger text-left">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection