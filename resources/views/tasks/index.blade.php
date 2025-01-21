@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    @vite('resources/css/tasks.css')
    <div class="container">
        <h1 class="mb-4">Список задач</h1>

        <form action="{{ route('tasks.create') }}" method="GET">
            <button type="submit" class="btn btn-primary mb-3">Створити нову задачу</button>
        </form>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            @foreach($tasks as $task)
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $task->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($task->description, 100) }}</p>
                            <p class="card-text">
                                <small class="text-muted">Створено: {{ $task->created_at->format('d.m.Y H:i') }}</small>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <form action="{{ route('tasks.edit', $task->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="btn btn-warning btn-sm">Редагувати</button>
                            </form>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Ви впевнені, що хочете видалити цю задачу?')">
                                    Видалити
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
