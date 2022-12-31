<nav class="bg-slate-100 pt-2 pl-2 font-bold flex flex-row justify-start items-center align-middle">
    <form action="{{ route('main.search.category') }}" method="post">
        @csrf

        <div class="text-3xl">
            Categories:
            <select name="categories" id="categories">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>

            <input class="bg-blue-500 hover:bg-blue-700 text-xl text-white font-bold py-2 px-4 rounded" type="submit"
                value="Search">
        </div>
    </form>
    {{-- <div class="w-1/3 text-5xl">
        <a href="{{ route('main.index') }}">HIS</a>
    </div>

    <div class="w-1/3 flex justify-center">
        <form action="{{ route('main.search') }}" method="post">
            @csrf
            <input class="h-11" type="text" placeholder="Search for item" name="key" />
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                value="Search">
        </form>
    </div>

    <div class="w-1/3 flex justify-end">
        <div class="dropdown">
            <button class="dropbtn w-48">Settings</button>
            <div class="dropdown-content">
                <a href="{{ route('user.profile.edit') }}">Profile</a>
                <a href="{{ route('main.index') }}">All Items</a>
                <a href="{{ route('main.cart') }}">Shopping Cart</a>
                <a href="{{ route('main.orders', 'pending') }}">My Pending Orders</a>
                <a href="{{ route('main.orders', 'confirmed') }}">My Confirmed Orders</a>
                <a href="" onclick="logout()">Logout</a>
            </div>
        </div>
    </div> --}}

</nav>
