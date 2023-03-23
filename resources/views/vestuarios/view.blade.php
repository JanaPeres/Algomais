<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Vestuario #{{ $vestuario->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $vestuario->nome }} - {{ $vestuario->vestidos }}</h1>

            <h2>preco {{ $vestuario->valor }}</h2>

            @if($vestuario->tamanho == 'P')
                <h2>Pequeno</h2>
             @elseif($vestuario->tamanho == 'M')
                 <h2>Medio</h2>
            @elseif($vestuario->tamanho == 'G')
                 <h2>Grande</h2>
            @elseif($vestuario->tamanho == 'GG')
                 <h2>G1</h2>
            @elseif($vestuario->tamanho == 'EX')
                 <h2>Extra Grande</h2>
             @endif

            <p>
                {{ $vestuario->observacao }}
            </p>

            <a href="{{ route('vestuarios.index') }}">Voltar a lista</a>
        </div>
    </body>
</html>
