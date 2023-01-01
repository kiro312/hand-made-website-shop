@extends('Admin.offers.offers')

@section('offers-content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-center">
                <div class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                    <form action="{{ route('offers.update', $offer->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="offer_title" :value="__('offer Name')" />
                            <input id="offer_title" type="text" name="offer_title" value="{{ $offer->offer_title }}">
                            <x-input-error :messages="$errors->get('offer_title')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="offer_description" :value="__('offer Description')" />
                            <input id="offer_description" type="text" name="offer_description"
                                value="{{ $offer->offer_description }}">
                            <x-input-error :messages="$errors->get('offer_description')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="offer_percentage" :value="__('offer Percentage')" />
                            <input id="offer_percentage" type="text" name="offer_percentage"
                                value="{{ $offer->offer_percentage }}">
                            <x-input-error :messages="$errors->get('offer_percentage')" class="mt-2" />
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
