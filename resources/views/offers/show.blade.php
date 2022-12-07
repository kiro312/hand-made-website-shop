@extends('offers.layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Percentage</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $offer->id }}</th>
                <td>{{ $offer->offer_title }}</td>
                <td>{{ $offer->offer_percentage }}</td>
                <td>{{ $offer->offer_description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
