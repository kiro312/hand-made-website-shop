@extends('User.layouts.master')

@section('second-nav')
@endsection

@section('content')
    <div>
        <div class="p-6 rounded-lg shadow-lg bg-white max-w-sm m-5 hover:bg-slate-100">
            <h5 class="text-gray-900 text-5xl leading-tight font-medium mb-2"> Order {{$orderDetails[0]->id}} </h5>
            <p class="text-gray-700 mb-4 text-2xl">
                {{ $payment->payment_method }}
            </p>
            <p class="text-gray-700 text-2xl mb-4">
                {{ $statues->order_statuses_title }}
            </p>

            <p class="text-gray-700 text-2xl mb-4">
                {{ $orderDetails[0]->total_price }} $
            </p>

        </div>
    </div>
@endsection
