@extends('Admin.order-statuses.layout')

@section('content')
    <div class="container">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Order Statuses Title</th>
                    <th scope="col">Order Statuses Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_statuses as $order_status)
                    <tr>
                        <th scope="row">{{ $order_status->id }}</th>
                        <td>{{ $order_status->order_statuses_title }}</td>
                        <td>{{ $order_status->order_statuses_description }}</td>
                        <td>

                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-success" href="{{ route('order-statuses.edit', $order_status->id) }}">
                                        Edit </a>

                                </div>
                                <div class="col-sm">
                                    <a class="btn btn-primary" href="{{ route('order-statuses.show', $order_status->id) }}">
                                        Show</a>
                                </div>

                                <div class="col-sm">
                                    <form action="{{ route('order-statuses.destroy', $order_status->id) }}" method="POST">
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
