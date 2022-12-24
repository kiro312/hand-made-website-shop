@extends('Admin.offers.layout')
@section('content')
    <h1>Edit offer</h1>

    <form action="{{ route('offers.update', $offer->id) }}" method="post">
        @csrf
        @method('put')
        <label for="offer_title">offer Name</label>
        <input id="offer_title" type="text" name="offer_title" value="{{ $offer->offer_title }}">
        <br><br>
        <label for="offer_percentage">Offer Percentage</label>
        <input id="offer_percentage" type="text" name="offer_percentage" value="{{ $offer->offer_percentage }}">
        <br><br>
        <label for="offer_description">Offer Description</label>
        <input id="offer_description" type="text" name="offer_description" value="{{ $offer->offer_description }}">
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
