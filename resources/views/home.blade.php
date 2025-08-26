<p>Home page</p>
@auth
    <p>Hello {{Auth::user()->name}}!</p>
    <p><a href="{{route('logout')}}">logout</a></p>
@else
    <p><a href="{{route('login')}}">login</a></p>
    <p><a href="{{route('register')}}">register</a></p>
@endauth
