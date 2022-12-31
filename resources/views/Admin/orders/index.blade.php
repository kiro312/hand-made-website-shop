@extends('Admin.orders.layout')

@section('content')
    <div class="container">
        <table class="table table-hover text-center ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">order_id</th>
                    <th scope="col">payment_method_id</th>
                    <th scope="col">total_price</th>
                    <th scope="col">order_status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="align-middle">
                        <td scope="row">{{ $order->id }}</td>
                        <td scope="row">{{ $order->order_id }}</td>
                        <td scope="row">{{ $order->payment_method_id }}</td>
                        <td scope="row">{{ $order->total_price }}</td>
                        <td scope="row">
                            <div class="col-sm">
                                <a class="btn btn-success" href="{{ route('order.confirmOrder', $order->id) }}"> Confirm
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
