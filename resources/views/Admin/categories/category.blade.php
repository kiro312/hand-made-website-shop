<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                {{ __('All Categories') }}
            </x-nav-link>

            <x-nav-link :href="route('categories.create')" :active="request()->routeIs('categories.create')">
                {{ __('Create') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @section('category-content')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Here You Can Categories
                    </div>
                </div>
            @show

        </div>
    </div>
</x-app-layout>
