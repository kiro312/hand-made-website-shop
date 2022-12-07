@extends('categories.layout')

@section('content')

  <div class="container">
    <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->category_name }}</td>
                <td>

                    <div class="row">
                        <div class="col-sm">
                            <a  class="btn btn-success" href="{{ route('categories.edit',$category->id)}}"> Edit </a>

                        </div>
                        <div class="col-sm">
                            <a  class="btn btn-primary" href="{{ route('categories.show',$category->id)}}"> Show</a>
                        </div>

                        <div class="col-sm">
                          <form action="{{ route('categories.destroy',$category)}}" method="POST">
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
