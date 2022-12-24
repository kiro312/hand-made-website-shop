<h1>Create Payment Method</h1>
@if ($errors->count() > 0)
    <p>The following errors have occurred:</p>

    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('payments.store') }}" method="post">
    @csrf
    <label for="payment_method">Payment Title</label>
    <input id="payment_method" type="text" name="payment_method" required>
    <br><br>
    <label for="payment_method_description">Payment Description</label>
    <input id="payment_method_description" type="text" name="payment_method_description">
    <br><br>
    <button type="submit">Create</button>
</form>
