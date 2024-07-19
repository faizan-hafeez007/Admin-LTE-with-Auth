@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Users
                </div>
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">There are no users.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection