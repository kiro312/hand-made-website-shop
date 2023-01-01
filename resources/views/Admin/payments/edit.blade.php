@extends('Admin.payments.payments')

@section('payment-content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-center">
                <div class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                    <form action="{{ route('payments.update', $payment->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="payment_method" :value="__('Payment Method Name')" />
                            <input id="payment_method" type="text" name="payment_method"
                                value="{{ $payment->payment_method }}">
                            <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="payment_method_description" :value="__('payment Description')" />
                            <input id="payment_method_description" type="text" name="payment_method_description"
                                value="{{ $payment->payment_method_description }}">
                            <x-input-error :messages="$errors->get('payment_method_description')" class="mt-2" />
                        </div>
                        <br>
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                            type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
