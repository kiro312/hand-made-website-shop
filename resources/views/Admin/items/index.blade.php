@extends('Admin.items.layout')

@section('content')
    <div class="container">
        <table class="table table-hover text-center ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="align-middle">
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>

                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-success" href="{{ route('items.edit', $item->id) }}"> Edit </a>
                                </div>
                                <div class="col-sm">
                                    <a class="btn btn-primary" href="{{ route('items.show', $item->id) }}"> Show</a>
                                </div>

                                <div class="col-sm">
                                    <form action="{{ route('items.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
