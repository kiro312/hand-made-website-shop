<nav class="bg-cyan-100 p-2 font-bold flex justify-center items-center">

    <div class="w-1/2 text-5xl">
        <a href="{{ route('main.index') }}">HIS</a>
    </div>

    <div class="w-1/2 flex justify-end">
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
    </div>

</nav>
