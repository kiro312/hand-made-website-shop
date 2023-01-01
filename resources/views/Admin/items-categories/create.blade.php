@extends('Admin.items.items')

@section('item-content')
    <div class="flex flex-col items-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <form action="{{ route('items-categories.store') }}" method="post">
                    @csrf
                    <div>
                        <x-input-label for="item_name" :value="__('Select Item')" />
                        <select name="item" id="item_name">
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->id }} - {{ $item->item_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->count() > 0)
                        <br>
                        @foreach ($errors->all() as $message)
                            <x-input-error :messages="$message" class="mt-2" />
                        @endforeach
                    @endif
                    <br>
                    <div>
                        <x-input-label for="category_name" :value="__('Select Category')" />
                        <select name="category" id="category_name">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->id }} - {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                        type="submit">Submit
                    </button>


                </form>
            </div>
        </div>
    </div>
@endsection
