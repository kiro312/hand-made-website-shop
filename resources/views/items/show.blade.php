@extends('items.layout')

@section('content')

    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">description</th>
                <th scope="col">Price</th>
                <th scope="col">Categories</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->item_description }}</td>
                <td>{{ $item->item_price }}</td>
                <td>
                    <div class="col-sm ">
                        @if (!$item_categories->isEmpty())
                            @foreach ($item_categories as $category)
                                <a class="btn btn-primary mb-3" href="{{ route('categories.show', $category->id) }}">
                                    {{ $category->category_name }}</a>
                            @endforeach
                        @else
                            There is no Category
                        @endif
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
