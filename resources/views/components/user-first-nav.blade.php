<nav class="bg-cyan-100 p-2 font-bold flex justify-center items-center">

    <div class="w-1/3 text-5xl">
        <a href="{{ route('main.index') }}">HIS</a>
    </div>

    <div class="w-1/3 flex justify-center">
        <form action="{{ route('main.search') }}" method="post">
            @csrf
            <input class="h-11" type="text" placeholder="Search By item" name="key" />
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                type="submit" value="Search">
        </form>
    </div>

    <div class="w-1/3 flex justify-end">
        <div class="dropdown">
            <button class="dropbtn w-48">Settings</button>
            <div class="dropdown-content">
                <a href="{{ route('main.index') }}">All Items</a>
                <a href="{{ route('user.profile.edit') }}">Profile</a>
                <a href="{{ route('main.cart') }}">Shopping Cart</a>
                <a href="{{ route('main.orders', 'pending') }}">My Pending Orders</a>
                <a href="{{ route('main.orders', 'confirmed') }}">My Confirmed Orders</a>
                <a href="" onclick="logout()">Logout</a>
            </div>
        </div>
    </div>

</nav>
