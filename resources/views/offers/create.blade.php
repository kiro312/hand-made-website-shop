<h1>Create Offer</h1>
@if ($errors->count() > 0)
    <p>The following errors have occurred:</p>

    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('offers.store') }}" method="post">
    @csrf
    <label for="offer_title">Offer Title</label>
    <input id="offer_title" type="text" name="offer_title" required>
    <br><br>
    <label for="offer_description">Offer Description</label>
    <input id="offer_description" type="text" name="offer_description">
    <br><br>
    <label for="offer_percentage">Offer Percentage</label>
    <input id="offer_percentage" type="text" name="offer_percentage" placeholder="write like 0.5" required>
    <br>
    <button type="submit">Create</button>
</form>
