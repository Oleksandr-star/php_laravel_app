@extends('layouts.app')

@section('title', 'Створити задачу')

@section('content')
    @vite('resources/css/create.css')
    <div class="container">
        <h1>Створити нову задачу</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="task-form">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Опис:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Створити задачу</button>
        </form>
    </div>
@endsection
