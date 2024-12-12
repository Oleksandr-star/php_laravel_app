<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="css/app.css">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Ім'я:</label>
            <input type="text" name="name" id="name" class="form-input" required>
        </div>
        <div>
            <label for="email">Електронна пошта:</label>
            <input type="email" name="email" id="email" class="form-input" required>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" class="form-input" required>
        </div>
        <div>
            <label for="password_confirmation">Підтвердження пароля:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-input" required>
        </div>
        <button type="submit" class="submit-btn">Зареєструватись</button>
    </form>

    @include('layouts.footer')
</body>
</html>