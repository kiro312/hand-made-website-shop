@extends('Admin.order-statuses.order_statuses')

@section('order_statues-content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-center">
                <div class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                    <form action="{{ route('order-statuses.update', $order_statuses->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="order_statuses_title" :value="__('Order Statues Title')" />
                            <input id="order_statuses_title" type="text" name="order_statuses_title"
                                value="{{ $order_statuses->order_statuses_title }}">
                            <x-input-error :messages="$errors->get('order_statuses_title')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="order_statuses_description" :value="__('Order Statues Description')" />
                            <input id="order_statuses_description" type="text" name="order_statuses_description"
                                value="{{ $order_statuses->order_statuses_description }}">
                            <x-input-error :messages="$errors->get('order_statuses_description')" class="mt-2" />
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
