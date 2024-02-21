@extends('layout.main')

@section('title', 'Корзина')

@section('body')
    <h1 class="text-white">Your Cart</h1>

    @if (count($items) > 0)
        <ul>
            @foreach ($items as $item)
                <li class="text-white">
                    {{ $item->product->name }} x {{ $item->quantity }}
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-white">Your cart is empty.</p>
    @endif
@endsection
