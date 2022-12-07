@extends('items.layout')
@section('content')
    <h1>Edit Item</h1>

    <form action="{{ route('items.update', $item->id) }}" method="post">
        @csrf
        @method('put')
        <label for="item_name">Item Name</label>
        <input id="item_name" type="text" name="item_name" value="{{ $item->item_name }}">
        <br><br>
        <label for="item_description">Item Description</label>
        <input id="item_description" type="text" name="item_description" value="{{ $item->item_description }}">
        <br><br>
        <label for="item_price">Item Price</label>
        <input id="item_price" type="number" name="item_price" value="{{ $item->item_price }}">
        <br>
        <button type="submit">Update</button>
    </form>

    <h1>Item Category</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item_categories as $item_category)
                <tr>
                    <td>{{ $item_category->id }}</td>
                    <td>{{ $item_category->category_name }}</td>
                    <td>
                        <div class="col-sm">
                            <a class="btn btn-primary" href="{{ route('categories.show', $item_category->id) }}"> Show</a>
                        </div>
                        <div class="col-sm">
                            @php
                                $ids = ['item_id' => $item->id, 'category_id' => $item_category->id];
                                $id_2 = 2;
                            @endphp
                            <form action="{{ route('items-categories.delete_category', $ids) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
