@extends('Admin.order-statuses.layout')
@section('content')
    <h1>Edit Order Statues</h1>
    <form action="{{ route('order-statuses.update', $order_statuses->id) }}" method="post">
        @csrf
        @method('put')
        <label for="order_statuses_title">Order Statues Title</label>
        <input id="order_statuses_title" type="text" name="order_statuses_title"
            value="{{ $order_statuses->order_statuses_title }}">
        <br><br>
        <label for="order_statuses_description">Order Statues Description</label>
        <input id="order_statuses_description" type="text" name="order_statuses_description"
            value="{{ $order_statuses->order_statuses_description }}">
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
