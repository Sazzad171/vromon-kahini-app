@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Destination Overview</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="destination-overview-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="destination-details-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ddc-title">
                                <h4>{{ $storyDetails->story_heading }}</h4>
                            </div>
                            <div class="ddc-meta">
                                <p><span class="sm-date">{{ date('d F Y', strtotime($storyDetails->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <img src="{{ $storyDetails->image ? asset('public/images/' . $storyDetails->image) :
                            asset('public/images/blog-do-5.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="ddc-welcome">
                        <p>{{ $storyDetails->details }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection