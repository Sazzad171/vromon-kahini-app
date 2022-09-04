@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area errorTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Edit Story</h2>
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
                        <h4>You are editing "{{ $storyDetails->story_heading }}"</h4>
                    </div>
                    <div class="cf-msg"></div>
                    <form method="post" action="{{ route('updateStory', $storyDetails->storyId) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="story_heading" value="{{ $storyDetails->story_heading }}"
                                        placeholder="Story heading...">
                                    @error('story_heading')
                                    <p class="text-danger text-left">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="location" value="{{ $storyDetails->location }}"
                                        placeholder="Location...">
                                    @error('location')
                                    <p class="text-danger text-left">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image">

                                    <img src="{{ $storyDetails->image ? asset('public/images/' . $storyDetails->image) :
                                        asset('public/images/blog-do-5.png') }}" class="img-fluid" alt="">

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
                                        rows="3">{{ $storyDetails->details }}</textarea>
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