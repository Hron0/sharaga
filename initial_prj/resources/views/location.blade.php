@extends('layout.main')

@section('title', 'Где нас найти')

@section('body')
    <div class="w-full flex flex-row-reverse items-start justify-between px-32">
        <div class="flex flex-col gap-2 items-start">
            <h1 class="text-white text-xl">Вы можете найти наш официальный магазин по следующему адресу:</h1>
            <h1 class="text-white text-xl">Пока что у нас лишь 1 фелиал.</h1>
        </div>
        <img src="{{ asset('images/location_map.jpg') }}" alt="" width="800">
    </div>
@endsection
