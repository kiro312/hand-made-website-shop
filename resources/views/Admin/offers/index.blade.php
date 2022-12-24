@extends('Admin.offers.layout')

@section('content')
    <div class="container">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Offer Title</th>
                    <th scope="col">Offer Percentage</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    <tr>
                        <th scope="row">{{ $offer->id }}</th>
                        <td>{{ $offer->offer_title }}</td>
                        <td>{{ $offer->offer_percentage }}</td>
                        <td>

                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-success" href="{{ route('offers.edit', $offer->id) }}"> Edit </a>

                                </div>
                                <div class="col-sm">
                                    <a class="btn btn-primary" href="{{ route('offers.show', $offer->id) }}"> Show</a>
                                </div>

                                <div class="col-sm">
                                    <form action="{{ route('offers.destroy', $offer) }}" method="POST">
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
