<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Title</title> @vite('resources/css/app.css')
</head>
<body>
{{--<h1 class="text-3xl font-bold "> Hello world! </h1>--}}
<p>Home page</p>
@auth
    <p>Hello {{Auth::user()->name}}!</p>
    <p><a href="{{route('logout')}}">logout</a></p>
@else
    <p><a href="{{route('login')}}">login</a></p>
    <p><a href="{{route('register')}}">register</a></p>
@endauth

</body>
</html>
