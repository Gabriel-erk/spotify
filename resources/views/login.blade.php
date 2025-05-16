<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Spotify - Login</title>
</head>

<body class="bg-body">
    <main class="container py-5">
        <div class="d-flex justify-content-center mb-5">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo do Spotify" style="width: 50vw">
        </div>

        <div>
            <form action="">
                <div class="mb-4">
                    <input type="email" class="form-control bg-secondary" id="email"
                        placeholder="Digite o seu e-mail">
                </div>

                <div class="mb-4">
                    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
                </div>

                <div class="mb-4">
                    <button class="btn btn-primary fw-bold w-100">Acessar</button>
                </div>

            </form>
            <p class="text-white fw-bold text-center">Ainda não possui conta? Cadastre-se</p>
        </div>
    </main>
</body>

</html>
