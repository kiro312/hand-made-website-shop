@extends('categories.layout')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->category_name}}</td>
        <td>{{$category->category_description}}</td>
      </tr>
    </tbody>
  </table>

@endsection