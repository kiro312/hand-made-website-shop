@extends('Admin.orders.orders')

@section('orders-content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            #
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            Order ID
                                        </th>

                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            User ID
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            User Name
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            total_price
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($orders as $order)
                                        @if ($order->orderDetails[0]->order_status_id == 2)
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 text-center">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                                    {{ $i }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    {{ $order->id }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    {{ $order->user->id }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    {{ $order->user->user_first_name }} {{ $order->user->user_last_name }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    {{ $order->orderDetails[0]->total_price }} $
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex flex-cols justify-around">
                                                    <a
                                                        href="{{ route('admin.orders.show', ['order' => $order->id, 'key' => 'confirmed']) }}">
                                                        <button
                                                            class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 rounded">
                                                            Show Order Details
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif

                                        @php
                                            $i += 1;
                                        @endphp
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
