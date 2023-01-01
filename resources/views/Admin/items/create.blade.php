@extends('Admin.items.items')

@section('item-content')
    <div class="flex flex-col items-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <form action="{{ route('items.store') }}" method="post">
                    @csrf
                    <div class="">
                        <x-input-label for="item_name" :value="__('Item Name')" />
                        <input id="item_name" type="text" name="item_name">
                        <x-input-error :messages="$errors->get('item_name')" class="mt-2" />
                    </div>
                    <br>

                    <div>
                        <x-input-label for="item_description" :value="__('Item Description')" />
                        <input id="item_description" type="text" name="item_description">
                        <x-input-error :messages="$errors->get('item_description')" class="mt-2" />
                    </div>
                    <br>
                    <div>
                        <x-input-label for="item_price" :value="__('Item Price')" />
                        <input id="item_price" type="number" name="item_price">
                        <x-input-error :messages="$errors->get('item_price')" class="mt-2" />
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
