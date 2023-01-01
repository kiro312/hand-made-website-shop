@extends('Admin.payments.payments')

@section('payment-content')
    <div class="flex justify-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">ID: {{ $payment->id }}</div>
                <div class="font-bold text-xl mb-2">Name: {{ $payment->payment_method }}</div>
                <p class="text-gray-700 text-base">
                    Description: {{ $payment->payment_method_description }}
                </p>
            </div>
        </div>
    </div>
@endsection
