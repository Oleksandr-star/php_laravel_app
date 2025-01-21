@extends('layouts.app')

@section('title', 'Контакти')

@section('content')
    @vite('resources/css/contacts.css')
    <div class="contact-container">
        <h1>Контакти</h1>
        <p>Зв'яжіться з нами за допомогою наступної форми:</p>
        
        <form class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Ваше ім'я:</label>
                <input type="text" name="name" id="name" required class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Повідомлення:</label>
                <textarea name="message" id="message" required class="form-control"></textarea>
            </div>
            <button type="submit" class="btn-submit">Відправити</button>
        </form>
    </div>
@endsection
