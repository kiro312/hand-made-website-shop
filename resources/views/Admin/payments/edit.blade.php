@extends('Admin.payments.layout')
@section('content')
    <h1>Edit Payment Method</h1>

    <form action="{{ route('payments.update', $payment->id) }}" method="post">
        @csrf
        @method('put')
        <label for="payment_method">payment Name</label>
        <input id="payment_method" type="text" name="payment_method" value="{{ $payment->payment_method }}">
        <br><br>
        <label for="payment_method_description">Offer Description</label>
        <input id="payment_method_description" type="text" name="payment_method_description"
            value="{{ $payment->payment_method_description }}">
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
