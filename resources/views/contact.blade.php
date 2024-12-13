<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакти</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <h1>Контакти</h1>
    <p>Зв’яжіться з нами за допомогою наступної інформації:</p>
    <ul>
        <li>Email: support@example.com</li>
        <li>Телефон: +38 050 123 4567</li>
    </ul>

    @include('layouts.footer')
</body>
</html>