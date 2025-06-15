@extends('frontend.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h3 class="mb-4">Register</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf
          <input type="hidden" name="role" id="" value="user">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                       class="form-control @error('name') is-invalid @enderror">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                       class="form-control @error('email') is-invalid @enderror">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" required
                       class="form-control @error('password') is-invalid @enderror">
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                       class="form-control">
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('login') }}">Already registered?</a>
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
