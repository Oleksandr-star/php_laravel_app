@extends('layouts.app')

@section('title', 'Панель керування')

@section('content')
    @vite('resources/css/dashboard.css')
    <div class="dashboard-container">
        <h1>Панель керування</h1>
        <p class="welcome-text">Ласкаво просимо до вашої персональної панелі керування. Тут ви можете переглядати і керувати вашими даними.</p>
        
        <div class="dashboard-stats">
            <div class="row">
                <div class="col-md-4">
                    <div class="card stat-card bg-primary">
                        <div class="card-header">Завдань</div>
                        <div class="card-body">
                            <h3>{{ Auth::user()->tasks()->count() }}</h3>
                            <p>Кількість ваших завдань</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card task-list-card">
            <div class="card-header">Останні завдання</div>
            <div class="card-body">
                @if(Auth::user()->tasks->isEmpty())
                    <p>У вас поки немає завдань. 
                        <button class="btn btn-success" onclick="window.location.href='{{ route('tasks.create') }}'">Створіть нове завдання</button>!
                    </p>
                @else
                    <ul class="list-group">
                        @foreach(Auth::user()->tasks()->latest()->take(5)->get() as $task)
                            <li class="list-group-item">
                                <strong>{{ $task->title }}</strong> 
                                <span class="text-muted">({{ $task->created_at->format('d.m.Y H:i') }})</span>
                                <div class="task-actions mt-1">
                                    <button class="btn btn-primary" onclick="window.location.href='{{ route('tasks.edit', $task) }}'">Редагувати</button>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Видалити</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <div class="row quick-links-row">
            <div class="col-md-6">
                <div class="card quick-links-card">
                    <div class="card-header">Швидкі посилання</div>
                    <div class="card-body">
                        <button class="btn btn-success mb-2" onclick="window.location.href='{{ route('tasks.create') }}'">Створити нове завдання</button>
                        <button class="btn btn-secondary mb-2" onclick="window.location.href='{{ route('tasks.index') }}'">Переглянути всі завдання</button>
                        <button class="btn btn-danger mb-2" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Вийти</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card info-card">
                    <div class="card-header">Корисна інформація</div>
                    <div class="card-body">
                        <p>Не забудьте регулярно перевіряти свої завдання!</p>
                        <p>Плануйте свій день для досягнення найкращих результатів.</p>
                        <p>Використовуйте 
                            <button class="btn btn-secondary mb-2" onclick="window.location.href='{{ route('about') }}'">
                                цей сервіс
                            </button> для підвищення вашої продуктивності.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
