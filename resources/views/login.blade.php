<x-layout title="Spotify - Login">
    <div class="px-4 col-12 col-md-6 col-lg-4 mx-auto">

        <div class="d-flex justify-content-center my-5">
            <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="Logo do Spotify">
        </div>

        <form action="">
            <div class="mb-4">
                <input type="email" class="form-control bg-secondary fw-medium  border border-0" id="email"
                    placeholder="Digite o seu e-mail">
            </div>

            <div class="mb-4">
                <input type="password" id="password" class="form-control bg-secondary fw-medium  border border-0"
                    aria-describedby="passwordHelpBlock" placeholder="*********">
            </div>

            <div class="mb-4">
                <button class="btn btn-primary w-100">Acessar</button>
            </div>

        </form>
        <div class="text-center">
            <a href="{{ route('cadastro') }}" class="text-decoration-none text-white">
                Ainda não possui conta? Cadastre-se
            </a>
        </div>
    </div>

</x-layout>
