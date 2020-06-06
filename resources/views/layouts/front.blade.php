<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @livewireStyles
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
@yield('content')

@livewireScripts
</body>
</html>
