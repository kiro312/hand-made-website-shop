@extends('User.layouts.master')

@section('second-nav')
@endsection

@section('content')
    @if (count($items) > 0)
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
                                        Item Quantity
                                    </th>
                                    <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                        Price
                                    </th>
                                    <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                        Offer Percentage
                                    </th>
                                    <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-center">
                                        Action
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
                                @foreach ($items as $item)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $i }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-lg font-medium text-gray-900">
                                            {{ $item->item_name }}
                                        </td>
                                        <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->item_description }}
                                        </td>
                                        <td id="item_qty_{{ $item->id }}"
                                            class="grid grid-cols-1 text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $cartItems[$i - 1]->item_quantity }}
                                            <select class="flex justify-center items-center" name="qty"
                                                id="qty_{{ $item->id }}"
                                                onchange="changeItemQtInCart({{ $item->id }})">
                                                @for ($x = 1; $x <= 10; $x++)
                                                    <option value="{{ $x }}">{{ $x }}</option>
                                                @endfor

                                            </select>
                                        </td>

                                        <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->item_price }}
                                        </td>

                                        <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @if (count($item->offers) >= 1)
                                                {{ $item->offers[0]->offer_percentage * 100 }}%
                                            @else
                                                No Offer
                                            @endif
                                        </td>
                                        <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <button
                                                class=" inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-500 hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                id="add_btn_{{ $item->id }}"
                                                onclick="removeFromCart({{ $item->id }})">
                                                Remove From Cart
                                            </button>
                                        </td>
                                        <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @if (count($item->offers) >= 1)
                                                {{ $item->item_price * $cartItems[$i - 1]->item_quantity * $item->offers[0]->offer_percentage }}
                                            @else
                                                {{ $item->item_price * $cartItems[$i - 1]->item_quantity }}
                                            @endif
                                        </td>
                                    </tr>
                                    @php
                                        $i += 1;
                                        if (count($item->offers) >= 1) {
                                            $total += $item->item_price * $cartItems[$i - 2]->item_quantity * $item->offers[0]->offer_percentage;
                                        } else {
                                            $total += $item->item_price * $cartItems[$i - 2]->item_quantity;
                                        }
                                    @endphp
                                @endforeach
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                    </td>
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
            <br>

            <div>
                <label for="payment">Choose Payment Method:</label>
                <select name="payment" id="payment">
                    @foreach ($payments as $payment)
                        <option value="{{ $payment->id }}">{{ $payment->payment_method }}</option>
                    @endforeach

                </select>
                <br><br>

                <button
                    class="text-2xl font-bold inline-block px-6 py-2.5 bg-blue-600 text-white leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    onclick="makeOrder()">
                    Make Order
                </button>
            </div>
        </div>
    @else
        <div class="text-8xl grid place-items-center h-screen">
            No Items in Cart
        </div>
    @endif
@endsection
