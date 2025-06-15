@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Add New User</h2>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control" required>
        <option value="">select</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
</div>
<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control" required>
         <option value="">select</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
</div>
        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection
