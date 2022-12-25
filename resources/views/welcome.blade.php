<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <h1>Shopping Cart{{ Auth::user()->shoppingCarts }}</h1>
    <h1>Orders {{ Auth::user()->orders }}</h1>
    @if ($errors->count() > 0)
        <p>The following errors have occurred:</p>

        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endif
    <div class="grid place-items-center h-screen"
        style="width: 200px; height: 200px; background-color: rgba(139, 211, 148, 0.703)">
        <h1>Item Name</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            onclick="addToCart()">Add</button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            onclick="removeFromCart()">Remove</button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            onclick="changeItemQtInCart()">chnage qt</button>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit"
            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('Log Out') }}
        </button>
    </form>

    <div class="grid place-items-center h-screen"
        style="width: 200px; height: 200px; background-color: rgba(196, 206, 105, 0.703)">
        <h1>Create Order</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            onclick="makeOrder()">makeOrder</button>
    </div>
</body>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function addToCart() {
        jQuery.ajax({
            url: "{{ route('cart.add') }}",
            type: "POST",
            data: {
                "item_id": 1,
                "item_quantity": 2,
            },
            success: function(data) {
                console.log(data);
            }
        });
    }

    function removeFromCart() {
        jQuery.ajax({
            url: "{{ route('cart.remove') }}",
            type: "DELETE",
            data: {
                "item_id": 1,
            },
            success: function(data) {
                console.log(data);
            }
        });
    }

    function changeItemQtInCart() {
        jQuery.ajax({
            url: "{{ route('cart.changeQt') }}",
            type: "POST",
            data: {
                "item_id": 1,
                "item_quantity": '5',
            },
            success: function(data) {
                console.log(data);
            }
        });
    }

    function makeOrder() {
        jQuery.ajax({
            url: "{{ route('order.make') }}",
            type: "POST",
            data: {
                "payment_method_id": 1,
            },
            success: function(data) {
                console.log(data);
            }
        });
    }
</script>

</html>
