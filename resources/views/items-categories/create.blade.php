<h1>Create Category for Item</h1>

<form action="{{route('items-categories.store')}}" method="post">
    @csrf
    <label for= "item_name">Select Item</label>
    <select name="item">
        @foreach ($items as $item)
            <option value="{{ $item->id }}">
                {{ $item->item_name }}
            </option>
        @endforeach
    </select>
    <br><br>
    <label for= "item_description">Select Category</label>
    <select name="category">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->category_name }}
            </option>
        @endforeach
    </select>
    <br>
    <button type="submit">Submit</button>
</form>