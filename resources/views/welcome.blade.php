<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Project</title>    
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')
    <div class="content">
        <h1>Hello, my name Oleksandr. Im create this site.</h1>
    </div>
    @include('layouts.footer')
</body>
</html>