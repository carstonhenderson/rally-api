<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lightest">
    <div id="app" class="container h-screen flex flex-col justify-between font-sans">
        <div>
            <nav class="p-4 flex justify-between items-center bg-green">
                <a href="{{ url('/') }}" class="text-black text-lg font-bold no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <p>@yield('title')</p>
            </nav>

            <main class="p-4">
                @yield('content')
            </main>
        </div>

        <nav class="p-4 bg-green">
            <ul class="flex justify-between items-center list-reset">
                <li>
                    <a href="#" class="text-black text-lg no-underline">Insight</a>
                </li>
                <li>
                    <a href="#" class="text-black text-lg no-underline">Entries</a>
                </li>
                <li>
                    <a href="#" class="text-black text-lg no-underline">Settings</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
