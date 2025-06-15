@extends('frontend.layouts.app')

@section('content')
<div class="text-center py-5">
    <h1>Welcome to My Blog</h1>
    <p class="lead">Simple blog demo with Bootstrap and Laravel</p>
    <a href="{{ route('blogs.index') }}" class="btn btn-primary">View Blogs</a>
</div>
@endsection
