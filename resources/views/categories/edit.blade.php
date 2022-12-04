@extends('categories.layout')
@section('content')
<h1>Edit Category</h1>

<form action="{{route('categories.update', $category->id)}}" method="post">
    @csrf
    @method('put')
    <label for= "category_name">Category Name</label>
    <input id = "category_name" type="text" name="category_name" value="{{$category->category_name}}">
    <br><br>
    <label for= "category_description">Description Description</label>
    <input id = "category_description" type="text" name="category_description" value="{{$category->category_description}}">
    <br>
    <button type="submit">Update</button>
</form>
@endsection
