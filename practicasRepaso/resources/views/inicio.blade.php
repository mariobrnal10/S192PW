<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <style>
        body, html{
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="dispaly-1">Mario Alejandro Bernal Barrón</h1>
        <p>S-192</p>
        <p>Programación Web</p>
        <p>Repaso 1</p>
        <p>Prof: Ivan Isay Guerra Lopez</p>

        <a href="{{route('rutarepaso')}}" class="btn btn-primary">Repaso 1</a>
    </div>
</body>
</html>