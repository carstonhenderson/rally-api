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
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-grey-lightest">
    <div id="app" class="h-screen flex flex-col justify-between font-sans">
        <nav class="p-4 bg-green">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-grey-lighter text-lg font-bold no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
    
                <p class="text-grey-lighter">@yield('title')</p>
            </div>
        </nav>

        <main class="container mx-auto flex-1 overflow-auto p-4">
            @yield('message')
            @yield('content')
        </main>

        @if (!(Request::is('login') ||Request::is('register') || Request::is('password/reset') || Request::is('password/reset/*')))
            <nav class="p-4 bg-green">
                <ul class="container mx-auto flex justify-between items-center list-reset">
                    <li class="w-1/3">
                        <a href="/insights" class="text-grey-lighter text-lg no-underline">Insights</a>
                    </li>

                    <li  class="w-1/3 text-center">
                        <a href="/entries" class="text-grey-lighter text-lg no-underline py-2 px-4 bg-green-dark rounded">Entries</a>
                    </li>
                    
                    <li  class="w-1/3 text-right">
                        <a href="/settings" class="text-grey-lighter text-lg no-underline">Settings</a>
                    </li>
                </ul>
            </nav>
        @endif
    </div>
</body>
</html>
