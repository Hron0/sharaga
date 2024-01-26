@extends('layout.main')

@section('title', 'Главная')

@section('body')
    <h1 class="text-white">Db connection test</h1>
    @if (isset($result))
        <h1 class="text-white font-bold font-TechMono text-3xl pt-6">{{ $result }}</h1>
    @endif
@endsection
