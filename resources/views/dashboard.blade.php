<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ласкаво просимо</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    @if (Auth::check()) 
        <h1>Ласкаво просимо, {{ Auth::user()->name }}!</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Вихід</button>
        </form>
    @else
        <p>Ви не авторизовані. <a href="{{ route('login') }}">Увійти</a></p>
    @endif

    @include('layouts.footer')
</body>
</html>