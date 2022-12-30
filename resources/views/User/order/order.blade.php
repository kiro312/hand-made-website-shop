@extends('User.layouts.master')

@section('second-nav')
@endsection

@section('content')
    <div class="grid grid-cols-3">
        @foreach ($orders as $order)
            @if ($order->orderDetails[0]->order_status_id == 1)
                <div class="p-6 rounded-lg shadow-lg bg-white max-w-sm m-5 hover:bg-slate-100">
                    <h5 class="text-gray-900 text-5xl leading-tight font-medium mb-2"> Order ID:
                        {{ $order->orderDetails[0]->id }}
                    </h5>
                    <p class="text-gray-700 mb-4 text-2xl">
                        Payment Method: {{ $order->orderDetails[0]->payment->payment_method }}
                    </p>

                    <p class="text-gray-700 text-2xl mb-4">
                        Order Price: {{ $order->orderDetails[0]->total_price }} $
                    </p>


                    <div class="flex justify-end">
                        <button
                            class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Show Order Details
                        </button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
