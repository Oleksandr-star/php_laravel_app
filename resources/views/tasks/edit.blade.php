@extends('layouts.app')

@section('title', 'Редагувати задачу')

@section('content')
    @vite('resources/css/create.css')
    <div class="container">
        <h1>Редагувати задачу</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="task-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Опис:</label>
                <textarea name="description" id="description" class="form-control" required>{{ $task->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Оновити задачу</button>
        </form>
    </div>
@endsection
