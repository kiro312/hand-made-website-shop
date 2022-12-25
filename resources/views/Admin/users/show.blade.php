@extends('Admin.users.layout')

@section('content')
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->user_first_name }}</td>
                <td>{{ $user->user_last_name }}</td>
                <td>{{ $user->user_phone }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>
@endsection
