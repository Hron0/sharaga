@extends('layout.main')

@section('title', 'Корзина')

@section('body')
    <h1>Your Cart</h1>

    @if (count($items) > 0)
        <ul>
            @foreach ($items as $item)
                <li>
                    {{ $item->product->name }} x {{ $item->quantity }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
