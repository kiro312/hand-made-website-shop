@extends('Admin.order-statuses.order_statuses')

@section('order_statues-content')
    <div class="flex justify-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">ID: {{ $order_statuses->id }}</div>
                <div class="font-bold text-xl mb-2">Name: {{ $order_statuses->order_statuses_title }}</div>
                <p class="text-gray-700 text-base">
                    Description: {{ $order_statuses->order_statuses_description }}
                </p>
            </div>
        </div>
    </div>
@endsection
