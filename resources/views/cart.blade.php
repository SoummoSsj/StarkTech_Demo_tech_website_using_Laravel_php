<!-- cart.blade.php -->

@extends('layouts.appp')

@section('content')
    <h1 id='carth1'>Cart</h1>

    @if ($cartItems->isEmpty())
        <p class='uss'>Your cart is empty!</p>
    @else
        <ul class="cartul">
            @foreach ($cartItems as $cartItem)
                <li>
                {{ $cartItem->product ? $cartItem->product->name : $cartItem->laptop->name }} ({{ $cartItem->quantity }})
                    <a class='rmv' href="{{ route('removeFromCart', ['cartItemId' => $cartItem->id]) }}">Remove</a>
                </li>
            @endforeach
        </ul>
        <p>Total Price: ${{ $totalPrice }}</p>

        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <button type="submit" class="sub2">Checkout</button>
        </form>
    @endif
@endsection
