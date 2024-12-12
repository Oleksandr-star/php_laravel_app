<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логін</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <h1>Логін</h1> 

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-input" required>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" class="form-input" required>
        </div>
        <button type="submit" class="submit-btn">Увійти</button>
    </form>

    @include('layouts.footer')
</body>
</html>