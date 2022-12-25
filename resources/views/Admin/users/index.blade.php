@extends('Admin.users.layout')

@section('content')
    <div class="container">
        <table class="table table-hover text-center ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">user name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="align-middle">
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->user_first_name }}</td>
                        <td>

                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-primary" href="{{ route('users.show', $user->id) }}"> Show</a>
                                </div>

                                <div class="col-sm">
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
