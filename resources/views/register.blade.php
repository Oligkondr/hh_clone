<form method="post" action="{{ route('registerCreate') }}">
    @csrf
    <label>Name</label>
    <input type="text" name="name" value="">
    <label>E-mail</label>
    <input type="email" name="email" value="">
    <label>Password</label>
    <input type="password" name="password" value="">
    <button type="submit">Go reg</button>
</form>
