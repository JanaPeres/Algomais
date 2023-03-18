<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Vestidos</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Vestidos</h1>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Vestidos</th>
                    <th>Preco</th>
                    <th>Tamanho</th>
                    <th>Cor</th>
                    <th></th>
                </tr>

                @foreach ($vestuarios as $vestuario)
                    <tr>
                        <td>{{ $vestuario->vestidos }}</td>
                        <td>{{ $vestuario->preco }}</td>
                        <td>{{ $vestuario->tamanho }}</td>
                        <td>{{ $vestuario->cor }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
