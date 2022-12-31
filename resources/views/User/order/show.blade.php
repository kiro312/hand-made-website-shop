@extends('User.layouts.master')

@section('first-nav')
    <x-nav-without-search></x-nav-without-search>
@endsection

@section('content')
    <div class="flex flex-col text-center">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    #
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    Item Name
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    Item Description
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    Item Quantit
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    Price
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    Offer Percentage
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                    Total
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                $total = 0;
                            @endphp
                            @foreach ($order->orderItemDetails as $item)
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $i }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-lg font-medium text-gray-900">
                                        {{ $item->items->item_name }}
                                    </td>
                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->items->item_description }}
                                    </td>
                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->item_quantity }}
                                    </td>

                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->items->item_price }}
                                    </td>

                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if (count($item->items->offers) >= 1)
                                            {{ $item->items->offers[0]->offer_percentage * 100 }}%
                                        @else
                                            No Offer
                                        @endif
                                    </td>
                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if (count($item->items->offers) >= 1)
                                            {{ $item->items->item_price * $item->item_quantity * $item->items->offers[0]->offer_percentage }}
                                        @else
                                            {{ $item->items->item_price * $item->item_quantity }}
                                        @endif
                                    </td>
                                </tr>
                                @php
                                    $i += 1;
                                    if (count($item->items->offers) >= 1) {
                                        $total += $item->items->item_price * $item->item_quantity * $item->items->offers[0]->offer_percentage;
                                    } else {
                                        $total += $item->items->item_price * $item->item_quantity;
                                    }
                                @endphp
                            @endforeach
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-lg font-medium text-gray-900">

                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $total }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
