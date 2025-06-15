
@extends('frontend.layouts.app')

@section('content')
<h2 class="mb-4">Latest Blogs</h2>
<div class="row">
    @foreach($blogs as $blog)
    <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="Blog image">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($blog->short_description, 100) }}</p>
                <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-outline-primary mt-auto">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4 d-flex justify-content-center">
    {{ $blogs->links() }}
</div>
@endsection

