@extends('Admin.payments.layout')

@section('content')
    <div class="container">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Payment Title</th>
                    <th scope="col">Payment Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <th scope="row">{{ $payment->id }}</th>
                        <td>{{ $payment->payment_method }}</td>
                        <td>{{ $payment->payment_method_description }}</td>
                        <td>

                            <div class="row">
                                <div class="col-sm">
                                    <a class="btn btn-success" href="{{ route('payments.edit', $payment->id) }}"> Edit </a>

                                </div>
                                <div class="col-sm">
                                    <a class="btn btn-primary" href="{{ route('payments.show', $payment->id) }}"> Show</a>
                                </div>

                                <div class="col-sm">
                                    <form action="{{ route('payments.destroy', $payment) }}" method="POST">
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
