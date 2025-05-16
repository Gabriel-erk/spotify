<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Spotify</title>
</head>

{{-- min-vh-100 pois assim é garantido que a tela usará pelo menos 100% da altura, independente do elemento pai (h-100 pega 100% do elemento pai, vh pega da tela) --}}
<body class="bg-body d-flex flex-column align-items-center justify-content-center min-vh-100">

    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo do Spotify" style="width: 50vw">

</body>

</html>