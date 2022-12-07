@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area home-title travel-tips-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Welcome to Vromon Kahini</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="want-toGo-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-title">
                    <h3>Start <span>Planning</span> Next Adventure Here.</h3>
                </div>
            </div>
            <div class="col-md-5">
                <div class="section-paragraph">
                    <p>I wasn&rsquo;t sure what to expect when I went to Tbilisi. What I assumed would be a drab
                        (but interesting) city was actually a vibrant, beautiful destination with great food and
                        plenty of history. It&rsquo;s the kind of place you can easily feel at home at and after
                        spending a few days there it&rsquo;s clear 72 hours is not enough time. </p>
                </div>
            </div>
        </div>

        {{-- search --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-5">
                <div class="search-form text-center">
                    <h4 class="heading mb-3">Our All Stories are Here</h4>
                    <p>Search here for your desired</p>
                    <form action="{{ route('search') }}">
                        <input type="text" name="search" class="form-control" placeholder="Search Here..." id="">
                        <button class="btn">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">

            @unless (count($story) === 0)
            @foreach ($story as $item)
                <div class="col-md-4">
                    <div class="single-tat">
                        <div class="stat-img">
                            <img src="{{ $item->image ? asset('public/images/' . $item->image) : 
                                asset('public/images/blog-do-5.png') }}" alt="">
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
                    <p class="text-center">No Story Found</p>
                </div>

            @endunless
            
        </div>

        {{-- pagination --}}
        @if ($story->lastPage() > 1 )
            <ul class="pagination justify-content-center">
                <li class="page-item  {{ $story->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $story->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $story->lastPage(); $i++)
                    <li class="page-item {{ $story->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $story->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $story->currentPage() == $story->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $story->url($story->currentPage() + 1) }}">Next</a>
                </li>
            </ul>
        @endif
    </div>
</section>
@endsection