<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counters</title>

    @livewireStyles
</head>
<body>
    @php
        $count=15;

        $datos=[
            'titulo'=>"Ejemplo de Counters",
            'descripcion'=>"Descripción del ejemplo de los counters de livewire"

            ];
            @endphp

    <livewire:counter :count="$count" :datos="$datos"/>

    @livewireScripts
</body>
</html>