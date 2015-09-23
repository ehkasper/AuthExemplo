
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Esqueceu sua senha?</title>
    </head>
    <body>

        <h1>Acreditamos que você esqueceu sua senha</h1>

        Clique aqui para recuperá-la: {{ url('password/reset/'.$token) }}    
    </body>
</html>

