<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <h1>Каталог</h1>
    <p>Перегляньте наш каталог товарів і знайдіть те, що вам потрібно.</p>
    <ul>
        <li>Товар 1</li>
        <li>Товар 2</li>
        <li>Товар 3</li>
    </ul>
    
    @include('layouts.footer')
</body>
</html>