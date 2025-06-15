@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>My Orders</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Total Price (₹)</th>
                <th>Status</th>
                <th>Placed At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr>
                <td>#{{ $order->id }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @empty
            <tr><td colspan="4">No orders found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
