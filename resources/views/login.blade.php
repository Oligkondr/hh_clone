<form method="post" action="{{ route('authentication') }}">
    @csrf
    <label>E-mail</label>
    <input type="email" name="email" value="">
    <label>Password</label>
    <input type="password" name="password" value="">
    <button type="submit">Go log</button>
</form>
