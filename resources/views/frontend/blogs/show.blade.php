

@extends('frontend.layouts.app')

@section('content')
<a href="{{ route('blogs.index') }}" class="btn btn-secondary mb-3">← Back to Blogs</a>

<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        <div class="card shadow-sm">
            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="Blog image">
            <div class="card-body">
                <h3 class="card-title">{{ $blog->title }}</h3>
                <p class="text-muted">{{ $blog->created_at->format('d M, Y') }}</p>
                <p>{{ $blog->short_description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

