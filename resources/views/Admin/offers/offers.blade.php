<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offers') }}
        </h2>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('offers.index')" :active="request()->routeIs('offers.index')">
                {{ __('All Offers') }}
            </x-nav-link>

            <x-nav-link :href="route('offers.create')" :active="request()->routeIs('offers.create')">
                {{ __('Create') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @section('offers-content')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Here You Can Manage Offers
                    </div>
                </div>
            @show

        </div>
    </div>
</x-app-layout>
