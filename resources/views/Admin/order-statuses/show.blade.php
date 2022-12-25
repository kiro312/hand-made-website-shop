@extends('Admin.order-statuses.layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $order_statuses->id }}</th>
                <td>{{ $order_statuses->order_statuses_title }}</td>
                <td>{{ $order_statuses->order_statuses_description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
