@extends('Admin.categories.category')

@section('category-content')
    <div class="flex justify-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">ID: {{ $category->id }}</div>
                <div class="font-bold text-xl mb-2">Name: {{ $category->category_name }}</div>
                <p class="text-gray-700 text-base">
                    Description: {{ $category->category_description }}
                </p>
                <br>
                <div>
                    @foreach ($category->items as $item)
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->item_name }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
