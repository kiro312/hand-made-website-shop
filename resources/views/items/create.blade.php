<h1>Create Item</h1>
@if ($errors->count() > 0)
    <p>The following errors have occurred:</p>

    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('items.store') }}" method="post">
    @csrf
    <label for="item_name">Item Name</label>
    <input id="item_name" type="text" name="item_name">
    <br><br>
    <label for="item_description">Item Description</label>
    <input id="item_description" type="text" name="item_description">
    <br><br>
    <label for="item_price">Item Price</label>
    <input id="item_price" type="number" name="item_price">
    <br>
    <button type="submit">Create</button>
</form>
