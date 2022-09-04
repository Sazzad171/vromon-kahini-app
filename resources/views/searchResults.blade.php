@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area travel-tips-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h3 class="text-white">Search Results for "{{ $request->search }}"</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="want-toGo-area section-padding">
    <div class="container">

        <div class="row">

            @unless (count($searchResults) === 0)
            @foreach ($searchResults as $item)
                <div class="col-md-4">
                    <div class="single-tat">
                        <div class="stat-img">
                            <img src="{{ asset('public/images/' . $item->image) }}" alt="">
                        </div>
                        <div class="stat-text">
                            <div class="stat-meta">
                                <p><span class="sm-date">{{ date('d F Y', strtotime($item->created_at)) }}</span></p>
                            </div>
                            <a href="{{ route('details', $item->storyId) }}">
                                <h4>{{ $item->story_heading }}</h4>
                            </a>
                            <div class="stat-location-comment">
                                <ul>
                                    <li class="slocation">
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $item->location }}</a>
                                    </li>
                                    <li class="slocation">
                                    <a href="#"><i class="fa fa-comments" aria-hidden="true"></i>Comment
                                        <span>(0)</span></a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @else
            <div class="col-12">
                <h5 class="text-center">No Result Found</h5>
            </div>

            @endunless
            
        </div>
    </div>
</section>
@endsection