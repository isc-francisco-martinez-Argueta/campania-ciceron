<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CICERÓN ALFARO | GANEMOS</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
         <header class="header">
            <section class="container">
            <div class="logo ">
                <a href="/">
                    <img src="{{asset('img/cice-logo.png')}}" alt="">
                </a>
            </div>
            <button class="menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
                </svg>
                <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </button>
            <nav class="menu">
                <a href="/">INICIO</a>
                <a href="/#propuestas">PROPUESTA</a>
                <a href="#separte">SE PARTE</a>
            </nav>
            </section>
        </header>

        @yield('content')



        @livewireScripts
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
