<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stock</title>

    <style>
        .detalle-titulo {
            font-family: "Montserrat", sans-serif;
            font-weight: bold;
            text-align: center;
            font-size: 1.15em;
            padding: 0.75em 0;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 0px;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }

        .detalle-titulo2{
            font-weight: bold;
            text-align: center;
            font-size: 1.15em;
            padding: 0.15em 0;
            text-transform: uppercase;
            margin-bottom: 0px;
            text-align: center;
            color: grey;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>

<body>

    <h1 class="detalle-titulo">Stock materia prima</h1>
    <h2 class="detalle-titulo2">"Panzotti Pastas"</h2>
    <p>fecha de impresion: {{$today}}</p>

    <table class="table table-borderless" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#codigo producto</th>
                <th scope="col">materia prima</th>
                <th scope="col">stock</th>
                <th scope="col">fecha ultima modificacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stock as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->updated_at}}</td>
                @endforeach
        </tbody>
    </table>

</body>

</html>