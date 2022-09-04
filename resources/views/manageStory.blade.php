@extends('layout.main')

@section('main-content')
<section class="innerpage-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-titile">
                    <h2>Manage My Stories</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="destination-overview-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Story Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        @unless ($stories->isEmpty())
                            @foreach ($stories as $story)
                                <tr>
                                    <td>{{ $story->story_heading }}</td>
                                    <td>
                                        <a href="{{ route('editStory', $story->storyId) }}" class="btn bg-info btn-style-b text-white mr-2">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('deleteStory', $story->storyId) }}">
                                            @csrf
                                            @method('DELETE');
                                            <button type="submit" href="{{ route('deleteStory', $story->storyId) }}" class="btn bg-danger btn-style-b text-white mr-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No Story Found</td>
                            </tr>
                        @endunless
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
@endsection