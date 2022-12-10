@extends('payments.layout')

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
                <td>{{ $payment->offer_title }}</td>
                <td>{{ $payment->offer_description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
