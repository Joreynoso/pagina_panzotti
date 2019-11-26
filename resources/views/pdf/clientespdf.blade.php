<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<style>
    body {
        font-size: 12px;
    }
</style>

<body>

    <div class="row">
        <div class="col-12 text-center mt-3">
            <img src="{{ asset('img/1574726509.jpg') }}" alt="" style="width: 200px;">
        </div>
    </div>

    <div class="container">
        <h1 class="display-4">Pastas Panzotti.</h1>
        <p>Direccion de la empresa: Prado 898.</p>
        <p>San Fernando del Valle de Catarmarca, Provincia de Catamarca. Argentina (2019)</p>
        <p>El presente informe detalla toda la informacion referente a los
            Clientes de la empresa "pastas Panzotti", el mismo corresponde al periodo de
            tiempo 25/11/2019 hasta el dia de la fecha 26/11/2019.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">Tel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellido}}</td>
                            <td>{{$item->domicilio}}</td>
                            <td>{{$item->tel}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="container">
            <div class="col-4 text-center mt-4">
                <p>firma presidente de la empresa.</p>
                <p class="mt-4">.............................................</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-12 mt-4 text-center">
                <p>el presente documento sirve como comprobante de las actividades que
                    realiza la empresa, ante las autoridades que asi lo requieran.</p>
            </div>
        </div>
    </div>

</body>

</html>