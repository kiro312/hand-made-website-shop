@extends('Admin.categories.category')

@section('category-content')
    <div class="flex flex-col items-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="">
                        <x-input-label for="category_name" :value="__('Category Name')" />
                        <input id="category_name" type="text" name="category_name">
                        <x-input-error :messages="$errors->get('category_name')" class="mt-2" />
                    </div>
                    <br>

                    <div>
                        <x-input-label for="category_description" :value="__('Category Description')" />
                        <input id="category_description" type="text" name="category_description">
                        <x-input-error :messages="$errors->get('category_description')" class="mt-2" />
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
