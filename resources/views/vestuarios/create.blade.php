<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Vestidos</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Vestido</h1>

            <form method="POST" action="{{ route('vestuarios.store') }}">
                @csrf

                <div class="mb-3">
                    <label>vestidos</label>
                    <input type="text" name="vestidos" class="form-control">
                </div>

                <div class="mb-3">
                    <label>preco</label>
                    <input type="number" name="preco" class="form-control">
                </div>

                <div class="mb-3">
                    <label>tamanho</label>
                    <input type="text" name="tamanho" class="form-control">
                </div>

                <div class="mb-3">
                    <label>cor</label>
                    <input type="text" name="cor" class="form-control">
                </div>

                <div class="mb-3">
                    <label>observacao</label>
                    <textarea name="observacao" id="" rows="5" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar Cadastro" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
