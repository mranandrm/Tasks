@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control" required>
        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
    </select>
</div>
<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control" required>
        <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
