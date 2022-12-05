@extends('items.layout')

@section('content')

<table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->item_name}}</td>
        <td>{{$item->item_description}}</td>
        <td>{{$item->item_price}}</td>
      </tr>
    </tbody>
  </table>

@endsection