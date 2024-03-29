@extends('User.layouts.master')

@section('first-nav')
    <x-user-first-nav></x-user-first-nav>
@endsection

@section('second-nav')
    <x-user-second-nav :categories="$categories" />
@endsection

@section('content')
    <div id="items_container" class="grid grid-cols-4">
        @foreach ($items as $item)
            @php
                $chack = false;
            @endphp
            @foreach ($cartItems as $cart)
                @if ($item->id == $cart->item_id)
                    @php
                        $chack = true;
                    @endphp
                @endif
            @endforeach
            <x-item-main-page :item="$item" :cartItems="$cartItems" :check="$chack" />
        @endforeach
    </div>
@endsection

@extends('User.layouts.js.search')
