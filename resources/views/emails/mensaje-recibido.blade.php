<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: sans-serif;
        }
        .container {
            padding: 20px 30px;
            background: #F8F9FA;
            color: #212529;
        }
        .header {
            background: #343A40;
            color: #F8F9FA;
            padding: 1px 30px;
            border-radius: 10px;
        }
        .content {

        }
        .contact {
            background: white;
            padding: 5px 25px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .sombra {
            -webkit-box-shadow: -5px 5px 4px -3px rgba(0,0,0,0.2);
            -moz-box-shadow: -5px 5px 4px -3px rgba(0,0,0,0.2);
            box-shadow: -5px 5px 4px -3px rgba(0,0,0,0.2);
        }
    </style>

</head>
<body>

    <div class="container">

        <div class="header sombra">
            <h1>Nueva Empresa Creada</h1>
        </div>

        <div class="content">

            <div class="contact sombra">
                <p><b>Nombre de la Empresa: </b>{{ $empresa['nombre'] }}</p>
                <p><b>Email: </b>{{ $empresa['email'] }}</p>
                <p><b>Direccion: </b>{{ $empresa['direccion'] }}</p>
                <p><b>Sitio Web: </b>{{ $empresa['website'] }}</p>
            </div>
        </div>
    </div>

</body>
</html>
