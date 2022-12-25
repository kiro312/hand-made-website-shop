@extends('Admin.payments.layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $payment->id }}</th>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->payment_method_description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
