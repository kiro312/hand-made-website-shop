@extends('Admin.payments.payments')

@section('payment-content')
    <div class="flex flex-col items-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <form action="{{ route('payments.store') }}" method="post">
                    @csrf
                    <div class="">
                        <x-input-label for="payment_method" :value="__('Payment Method Name')" />
                        <input id="payment_method" type="text" name="payment_method">
                        <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
                    </div>
                    <br>

                    <div>
                        <x-input-label for="payment_method_description" :value="__('payment Description')" />
                        <input id="payment_method_description" type="text" name="payment_method_description">
                        <x-input-error :messages="$errors->get('payment_method_description')" class="mt-2" />
                    </div>
                    <br>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                        type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
