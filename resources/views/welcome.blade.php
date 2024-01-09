<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container-md mt-5">
            <div class="title m-b-md">
                {{config("app.name","Laravel")}}
            </div>
            <h4>歡迎進入會員管理系統</h4>
        </div>
        <div class="container-md mt-3">
                @if(Route::has("login"))
                <div class="top-right links">
                    @auth
                    <a href="{{url('/home')}}" class="btn btn-primary">會員管理系統</a>
                    @else
                    <a href="{{route('login')}}" class="btn btn-primary">會員登入</a>
                        @if(Route::has("register"))
                            <a href="{{route('register')}}" class="btn btn-danger">會員註冊</a>
                        @endif
                    @endauth
                </div>
                @endif
        </div>
    </body>
</html>
