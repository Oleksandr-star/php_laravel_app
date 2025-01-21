@extends('layouts.app')

@section('title', 'Реєстрація')

@section('content')
    @vite('resources/css/register.css')
    <div class="form-container">
        <h1>Реєстрація</h1>
        <form action="{{ route('registerUser') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="name">Ім'я:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Підтвердження пароля:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Зареєструватись</button>
        </form>
    </div>
@endsection
