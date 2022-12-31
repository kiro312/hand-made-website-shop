<nav class="bg-slate-100 pt-2 pl-2 font-bold flex flex-row justify-start items-center align-middle ">
    <form action="{{ route('main.search.category') }}" method="post">
        @csrf

        <div class="text-3xl mr-3">
            Categories:
            <select name="categories" id="categories">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>

            <input
                class="bg-blue-500 hover:bg-blue-700 text-xl text-white font-bold py-2 px-4 rounded hover:cursor-pointer"
                type="submit" value="Search">

    </form>
    {{-- <button class=d"bg-blue-500 hover:bg-blue-700 text-xl text-white font-bold py-2 px-4 rounded"
            onclick="searchByCategory()">Search 2</button> --}}
    </div>
    <div class="text-3xl mb-4">
        <a href="{{ route('main.index') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-xl text-white font-bold py-2 px-4 rounded">Reset</button>
        </a>
    </div>
</nav>
