@extends('layout.main')

@section('title', 'Калькулятор Кв. Ур.')

@section('body')
    <h1 class="text-white text-xl pb-8 font-TechMono">Калькулятор Квадратного Уравнения</h1>

    @include('discriminant._form')

    @if (isset($result))
        <p class="text-white font-bold font-TechMono text-3xl pt-6">Ответ: {{ $result }}</p>
    @endif
@endsection
