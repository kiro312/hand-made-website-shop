@extends('Admin.order-statuses.order_statuses')

@section('order_statues-content')
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
                                            ID
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                            Name
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
                                    @foreach ($order_statuses as $order_status)
                                        <tr
                                            class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 text-center">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                                {{ $i }}
                                            </td>
                                            <td
                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                {{ $order_status->id }}
                                            </td>
                                            <td
                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                {{ $order_status->order_statuses_title }}
                                            </td>
                                            <td
                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex flex-cols justify-between">
                                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded"
                                                    href="{{ route('order-statuses.edit', $order_status->id) }}"> Edit
                                                </a>
                                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 rounded"
                                                    href="{{ route('order-statuses.show', $order_status->id) }}">
                                                    Show</a>
                                                <form action="{{ route('order-statuses.destroy', $order_status) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 rounded">Delete</button>
                                                </form>
                        </div>
                        </td>
                        </tr>
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
