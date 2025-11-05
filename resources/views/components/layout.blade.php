<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
   <script src="{{ asset('tailwindcss.js') }}"></script>
</head>
<body class="flex flex-col h-screen">
    <header class="flex justify-between px-5 py-2 border-b">
        <div>
            <x-link href="{{ route('home') }}" class="flex items-center gap-x-2">
                <img src="{{ asset('logo.png') }}" class="h-6 w-6 object-cover" alt="">
                copy master
            </x-link>

        </div>
        <nav class="flex gap-x-4">
            <x-link href="">О нас</x-link>
            <x-link href="{{ route('catalogue') }}">Каталог</x-link>
            <x-link href="{{ route('where') }}">Где нас найти</x-link>
        </nav>
        <ul class="flex gap-x-4">
            @guest
            <li><x-link href="{{ route('register') }}">Регистрация</x-link></li>
            <li><x-link href="{{ route('login') }}">Авторизация</x-link></li>                
            @endguest
            @auth
            <li><x-link href="{{ route('cart') }}">Корзина</x-link></li>
            <li><x-link href="">Выход</x-link></li>
            @endauth

        </ul>
    </header>
<main class="flex-grow">{{ $slot }}</main>
<footer>footer</footer>
</body>
</html>
