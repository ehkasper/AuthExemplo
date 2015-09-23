@foreach($errors->all() as $error)
 {{ $error }}
@endforeach

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Nome
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Senha
        <input type="password" name="password">
    </div>

    <div>
        Confirme sua Senha
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Registrar</button>
    </div>
</form>