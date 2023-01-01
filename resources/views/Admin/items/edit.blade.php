@extends('Admin.items.items')

@section('item-content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="grid grid-rows-3 gap-2 ">
                <div class="flex justify-center">
                    <div class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                        <form action="{{ route('items.update', $item->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="item_name" :value="__('Item Name')" />
                                <input id="item_name" type="text" name="item_name" value="{{ $item->item_name }}">
                                <x-input-error :messages="$errors->get('item_name')" class="mt-2" />
                            </div>
                            <br>
                            <div>
                                <x-input-label for="item_description" :value="__('Item Description')" />
                                <input id="item_description" type="text" name="item_description"
                                    value="{{ $item->item_description }}">
                                <x-input-error :messages="$errors->get('item_description')" class="mt-2" />
                            </div>
                            <br>
                            <div>
                                <x-input-label for="item_price" :value="__('Item Price')" />
                                <input id="item_price" type="number" name="item_price" value="{{ $item->item_price }}">
                                <x-input-error :messages="$errors->get('item_price')" class="mt-2" />
                            </div>
                            <br>
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                                type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="flex justify-around items-center">
                    @foreach ($item->categories as $category)
                        <div class="">
                            <div
                                class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                                <div class="flex flex-col ">
                                    <div class="my-2 font-bold text-xl mb-2">ID: {{ $category->id }}</div>
                                    <div class="my-2 font-bold text-xl mb-2">Name: {{ $category->category_name }}</div>
                                    <p class="my-2 text-gray-700 text-base">
                                        Description: {{ $category->category_description }}
                                    </p>
                                    <p class="my-2 text-gray-700 text-base">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                                            href="{{ route('categories.show', $category->id) }}">
                                            Show</a>
                                    </p>
                                    <p class="my-2 text-gray-700 text-base">
                                        @php
                                            $ids = ['item_id' => $item->id, 'category_id' => $category->id];
                                        @endphp
                                    <form action="{{ route('items-categories.delete_category', $ids) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer">Delete</button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-around items-center">
                    @foreach ($item->offers as $offer)
                        <div>
                            <div
                                class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                                <div class="flex flex-col ">
                                    <div class="my-2 font-bold text-xl mb-2">ID: {{ $offer->id }}</div>
                                    <div class="my-2 font-bold text-xl mb-2">Name: {{ $offer->offer_title }}</div>
                                    <p class="my-2 text-gray-700 text-base">
                                        Description: {{ $offer->offer_description }}
                                    </p>
                                    <p class="my-2 text-gray-700 text-base">
                                        Percentage: {{ $offer->offer_percentage }}
                                    </p>
                                    <p class="my-2 text-gray-700 text-base">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                                            href="{{ route('offers.show', $offer->id) }}">
                                            Show</a>
                                    </p>
                                    <p class="my-2 text-gray-700 text-base">
                                        @php
                                            $ids = ['item_id' => $item->id, 'offer_id' => $offer->id];
                                        @endphp
                                    <form action="{{ route('items-offers.delete_offer', $ids) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer">Delete</button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
