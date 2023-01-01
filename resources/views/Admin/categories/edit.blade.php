@extends('Admin.categories.category')

@section('category-content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-center">
                <div class="px-6 py-4 max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="category_name" :value="__('category Name')" />
                            <input id="category_name" type="text" name="category_name"
                                value="{{ $category->category_name }}">
                            <x-input-error :messages="$errors->get('category_name')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="category_description" :value="__('category Description')" />
                            <input id="category_description" type="text" name="category_description"
                                value="{{ $category->category_description }}">
                            <x-input-error :messages="$errors->get('category_description')" class="mt-2" />
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
