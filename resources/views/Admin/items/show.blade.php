@extends('Admin.items.items')

@section('item-content')
    <div class="flex justify-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">ID: {{ $item->id }}</div>
                <div class="font-bold text-xl mb-2">Name: {{ $item->item_name }}</div>
                <p class="text-gray-700 text-base">
                    Description: {{ $item->item_description }}
                </p>
                <p class="text-gray-700 text-base">
                    Price: {{ $item->item_price }} $
                </p>

            </div>
            <div class="px-6 pt-4 pb-2">
                Categories:
                @foreach ($item->categories as $category)
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $category->category_name }}</span>
                @endforeach
            </div>

            <div class="px-6 pt-4 pb-2">
                Offer:
                @foreach ($item->offers as $offer)
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $offer->offer_title }}:
                        {{ $offer->offer_percentage * 100 }} %
                    </span>
                @endforeach
            </div>
        </div>
    </div>
@endsection
