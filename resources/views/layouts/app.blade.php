<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <nav class="p-3 bg-white mb-10 shadow-md">
        <div class="container mx-auto flex justify-between">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Post</a>
                </li>
            </ul>
            <ul class="flex items-center">
                @if (auth()->check())
                <li>
                    <a href="" class="p-3">Welcome, {{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="display-inline px-3">
                        @csrf
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg font-medium" type="submit">Logout</button>
                    </form>
                </li>
                @else
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="p-3">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg font-medium" type="button">Login</button>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>