<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        .active{
            color: darkcyan;
            font-weight: bold;
        }
    </style>


    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('layout.partials.header')
    
    @yield('content')
</body>
</html>