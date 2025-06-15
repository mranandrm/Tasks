@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>External Users</h2>
        <form method="GET" action="{{ route('external.users') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ $search }}">
        <button class="btn btn-primary" type="submit">Search</button>
        @if(request()->has('search') && request()->search != '')
            <a href="{{ route('external.users') }}" class="btn btn-outline-secondary">Clear</a>
        @endif
    </div>
</form>

        @if(isset($error))
            <div class="alert alert-danger">{{ $error }}</div>
        @endif

        @if(count($users) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>
                                    {{ $user['address']['street'] }},
                                    {{ $user['address']['city'] }},
                                    {{ $user['address']['zipcode'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No users found.</p>
        @endif
    </div>
@endsection
