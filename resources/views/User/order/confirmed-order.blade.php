@extends('User.layouts.master')

@section('second-nav')
@endsection

@section('content')
    <br>
    <div class="flex justify-center items-center text-6xl">
        Confirmed Orders
    </div>
    <br>
    <div class="grid grid-cols-3 gap-y-7">
        @foreach ($orders as $order)
            @if ($order->orderDetails[0]->order_status_id == 2)
                <div class="justify-self-center self-center p-6 rounded-lg shadow-lg bg-white  hover:bg-slate-100">
                    <h5 class="font-bold text-gray-900 text-5xl leading-tight mb-2"> Order ID:
                        {{ $order->orderDetails[0]->id }}
                    </h5>
                    <p class="font-bold text-gray-700 mb-4 text-2xl">
                        Payment Method: {{ $order->orderDetails[0]->payment->payment_method }}
                    </p>

                    <p class="font-bold text-gray-700 text-2xl mb-4">
                        Order Price: {{ $order->orderDetails[0]->total_price }} $
                    </p>


                    <div class="flex justify-between">
                        <a href="{{ route('order.show', ['order' => $order->id, 'key' => 'pending']) }}">
                            <button
                                class="font-bold inline-block px-3 ml-1 py-2.5 bg-blue-600 text-white text-xl leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Show Order Details
                            </button>
                        </a>

                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
