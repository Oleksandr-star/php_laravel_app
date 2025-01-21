@extends('layouts.app')

@section('title', 'Ласкаво просимо')

@section('content')
    @vite('resources/css/welcome.css')
    <div class="welcome-page">
        <div class="hero-section text-center py-5 bg-primary text-white">
            <h1 class="display-4">Ласкаво просимо!</h1>
            <p class="lead">Досліджуйте можливості нашого сайту та керуйте своїми задачами легко і швидко.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg shadow-sm">Перейти до панелі керування</a>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>Особливості:</h3>
                    <ul>
                        <li>Створення та редагування задач</li>
                        <li>Перегляд статусів та деталей</li>
                        <li>Зручна панель керування</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Швидкий доступ:</h3>
                    <ul>
                        <li><a href="{{ route('tasks.index') }}" class="btn-link">Мої задачі</a></li>
                        <li><a href="{{ route('tasks.create') }}" class="btn-link">Створити нову задачу</a></li>
                        <li><a href="{{ route('contact') }}" class="btn-link">Зв'язатись з нами</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center py-4">
            <p class="lead">Ще не маєте облікового запису?</p>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg shadow-sm">Зареєструватись</a>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
