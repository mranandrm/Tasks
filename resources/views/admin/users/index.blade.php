@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>User Management</h2>
    <a href="{{ route('user.create') }}" class="btn btn-success mb-3">Add User</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
      <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ ucfirst($user->role) }}</td>
            <td>{{ ucfirst($user->status) }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm" onsubmit="return confirm('Are you sure?')">Delete</a>

            </td>
        </tr>
    @endforeach
</tbody>
    </table>
</div>
@endsection