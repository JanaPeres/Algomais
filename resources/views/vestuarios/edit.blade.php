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
            <h1>Edição do Vestuario {{ $vestuario->id }}</h1>

            <form method="POST" action="{{ route('vestuarios.update', $vestuario->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>vestidos</label>
                    <input type="text" name="vestidos" class="form-control" value="{{ $vestuario->vestidos }}">
                </div>

                <div class="mb-3">
                    <label>preco</label>
                    <input type="number" name="preco" class="form-control" value="{{ $vestuario->preco }}">
                </div>

                <div class="mb-3">
                    <label>tamanho</label>
                    <input type="text" name="tamanho" class="form-control" value="{{ $vestuario->tamanho }}">
                </div>

                <div class="mb-3">
                    <label>cor</label>
                    <input type="text" name="cor" class="form-control" value="{{ $vestuario->cor }}">
                </div>

                <div class="mb-3">
                    <label>observacao</label>
                    <textarea name="observacao" id="" rows="5" class="form-control">{{ $vestuario->observacao }}</textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar Cadastro" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
