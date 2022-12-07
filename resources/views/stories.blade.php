@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area travel-tips-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Our All Travel Stories</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="want-toGo-area section-padding">
    <div class="container">
        {{-- search --}}
        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <h6 class="text-center text-lg-left mb-3">Search here for your desired</h6>
            </div>
            <div class="col-lg-4">
                <div class="search-form">
                    <form action="{{ route('search') }}" class="d-flex">
                        <input type="text" name="search" class="form-control" placeholder="Search Here..." id="">
                        <button class="btn">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">

            @unless (count($stories) === 0)
            @foreach ($stories as $item)
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
        @if ($stories->lastPage() > 1 )
            <ul class="pagination justify-content-center">
                <li class="page-item  {{ $stories->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $stories->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $stories->lastPage(); $i++)
                    <li class="page-item {{ $stories->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $stories->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $stories->currentPage() == $stories->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $stories->url($stories->currentPage() + 1) }}">Next</a>
                </li>
            </ul>
        @endif
    </div>
</section>
@endsection