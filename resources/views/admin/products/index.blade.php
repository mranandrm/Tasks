@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Product List (Stock > 10)</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price (₹)</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
            </tr>
            @empty
            <tr><td colspan="4">No products found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
