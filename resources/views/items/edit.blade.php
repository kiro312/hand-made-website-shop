@extends('items.layout')
@section('content')
<h1>Edit Category</h1>

<form action="{{route('items.update', $item->id)}}" method="post">
    @csrf
    @method('put')
    <label for= "item_name">Item Name</label>
    <input id = "item_name" type="text" name="item_name" value="{{$item->item_name}}">
    <br><br>
    <label for= "item_description">Item Description</label>
    <input id = "item_description" type="text" name="item_description" value="{{$item->item_description}}">
    <br><br>
    <label for= "item_price">Item Price</label>
    <input id = "item_price" type="number" name="item_price" value="{{$item->item_price}}">
    <br>
    <button type="submit">Update</button>
</form>
@endsection
