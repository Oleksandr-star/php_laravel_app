<header>
    <nav>
        <a href="{{ route('welcome') }}">Головна</a>
        <a href="{{ route('about') }}">Про нас</a>
        @auth
            <a href="{{ route('catalog') }}">Каталог</a>
            <a href="{{ route('contact') }}">Контакти</a> 
            <a href="{{ route('dashboard') }}">Профіль</a>  
        @endauth

        @guest
            <a href="{{ route('login') }}">Увійти</a>
            <a href="{{ route('register') }}">Реєстрація</a>
        @endguest
    </nav>
</header>