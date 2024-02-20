@extends('layout.main')

@section('title', 'Register')

@section('body')
    <div class="w-full flex flex-col items-center relative">
        <form action="{{ route('register/post') }}" method="post" onsubmit="formAction(this, event)" class="flex flex-col items-center w-[45%] bg-slate-900 gap-4">
            @csrf
            <h1 class="text-3xl text-white font-bold mt-4">Регистрация</h1>

            <div class="flex flex-col items-start gap-1 relative">
                <label for="name" class="text-white text-xl">Имя</label>

                <input type="text" id="name" name="name" placeholder="Ваше имя"
                    class="w-[25rem] rounded-md border-gray-200 shadow-sm text-lg sm:text-sm py-2 px-1" />
            </div>
            <div class="flex flex-col items-start gap-1 relative">
                <label for="mail" class="text-white text-xl">Почта</label>

                <input type="text" id="email" name="email" placeholder="Ваша почта"
                    class="w-[25rem] rounded-md border-gray-200 shadow-sm text-lg sm:text-sm py-2 px-1" />
            </div>
            <div class="flex flex-col items-start gap-1 relative">
                <label for="password" class="text-white text-xl">Пароль</label>

                <input type="password" id="password" name="password" placeholder="Ваш пароль"
                    class="w-[25rem] rounded-md border-gray-200 shadow-sm text-lg sm:text-sm py-2 px-1" />
            </div>

            <button type="submit" class="text-3xl rounded-md bg-stone-700 px-3 py-2 text-white font-bold">Зарегестрироваться</button>
        </form>
    </div>
@endsection
