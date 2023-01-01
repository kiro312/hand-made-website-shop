<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Methods') }}
        </h2>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('payments.index')" :active="request()->routeIs('payments.index')">
                {{ __('All Payment Methods') }}
            </x-nav-link>

            <x-nav-link :href="route('payments.create')" :active="request()->routeIs('payments.create')">
                {{ __('Create') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @section('payment-content')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Here You Can Manage Payment Methods
                    </div>
                </div>
            @show

        </div>
    </div>
</x-app-layout>
