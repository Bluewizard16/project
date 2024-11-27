<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="info" class="mb-4">
            <x-slot name="alertType">
                Info alert
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>
</body>
</html>