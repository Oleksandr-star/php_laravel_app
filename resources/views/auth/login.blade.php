@extends('layouts.app')

@section('title', 'Вхід у систему')

@section('content')
    @vite('resources/css/register.css')
    <div class="form-container">
        <h1>Вхід у систему</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Увійти</button>
        </form>
    </div>
@endsection