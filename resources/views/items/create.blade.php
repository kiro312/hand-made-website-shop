@if ($errors->count() > 0)
    <p>The following errors have occurred:</p>

    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<div style="position: absolute;left: 50%; top: 50%; transform: translate(-50%, -50%);">
    <h1>Create Item</h1>
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
</div>