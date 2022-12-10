<h1>Create Order Statues</h1>
@if ($errors->count() > 0)
    <p>The following errors have occurred:</p>

    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('order-statuses.store') }}" method="post">
    @csrf
    <label for="order_statuses_title">Order Statuses Title</label>
    <input id="order_statuses_title" type="text" name="order_statuses_title" required>
    <br><br>
    <label for="order_statuses_description">Order Statuses Description</label>
    <input id="order_statuses_description" type="text" name="order_statuses_description">
    <br><br>
    <button type="submit">Create</button>
</form>
