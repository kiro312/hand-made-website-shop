<a class="flex flex-col justify-between p-6 rounded-lg shadow-lg bg-white max-w-sm m-5 hover:bg-slate-100">
    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $item->item_name }}</h5>
    <p class="text-gray-700 text-base mb-4">
        {{ $item->item_description }}
    </p>
    <p class="text-gray-700 text-base mb-4">
        {{ $item->item_price }} $
    </p>
    @if (count($item->categories))
        @foreach ($item->categories as $category)
            <div class="mb-5 p-1 bg-green-600 font-bold text-2xl flex items-center justify-center">
                {{ $category->category_name }}
            </div>
        @endforeach
    @endif

    @if (count($item->offers))
        @foreach ($item->offers as $offers)
            <div class="mb-5 p-1 bg-cyan-600 font-bold text-2xl flex items-center justify-center">
                {{ $offers->offer_title }}
            </div>
        @endforeach
    @endif

    @if ($check)
        <button
            class="self-end align-bottom font-bold px-6 py-2.5 bg-red-600 text-white text-xs leading-tight uppercase rounded shadow-md hover:bg-red-500 hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
            id="add_btn_{{ $item->id }}" onclick="removeFromCart({{ $item->id }})">
            Remove From Cart
        </button>
    @else
        <button
            class="self-end align-bottom font-bold px-6 py-2.5 bg-blue-600 text-white text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            id="add_btn_{{ $item->id }}" onclick="addToCart({{ $item->id }})">
            Add To Cart
        </button>
    @endif

</a>
