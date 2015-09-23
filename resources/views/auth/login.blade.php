@foreach($errors->all() as $error)
 {{ $error }}
@endforeach

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Senha
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Lembre-se de mim
    </div>

    <div>
        <button type="submit">Login</button>
    </div>

    <div>
        <a href="/auth/register">Não sou cadastrado</a>
    </div>

    <div>
        <a href="/password/email">Esqueci minha senha</a>
    </div>
</form>