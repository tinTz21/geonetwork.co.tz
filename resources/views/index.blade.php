<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Globec Scientists</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!-- Styles -->
        <style>
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="col-md-12" style="margin-right: 0em;"> 
        
            <div class="col-md-12">
                {{-- @livewire('home.secondary-menu') --}}
                 {{-- @livewire('home.primary-menu') --}} 
                @livewire('home.show-home')
                @livewire('home.footer')
            </div>

        @livewireScripts
    </body>
</html>