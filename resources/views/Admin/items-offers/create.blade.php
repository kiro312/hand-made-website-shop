<h1>Create Offer for Item</h1>
@if ($errors->count() > 0)
    <p>The following errors have occurred:</p>

    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('items-offers.store') }}" method="post">
    @csrf
    <label for="item_name">Select Item</label>
    <select name="item">
        @foreach ($items as $item)
            <option value="{{ $item->id }}">
                {{ $item->item_name }}
            </option>
        @endforeach
    </select>
    <br><br>
    <label for="offer_title">Select Offer</label>
    <select name="offer">
        @foreach ($offers as $offer)
            <option value="{{ $offer->id }}">
                {{ $offer->offer_title }}
                -
                {{ $offer->offer_percentage * 100 }}%
            </option>
        @endforeach
    </select>
    <br>
    <button type="submit">Submit</button>
</form>
