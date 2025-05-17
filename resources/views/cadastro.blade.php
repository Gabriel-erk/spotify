<x-layout title="Spotify - Cadastro">
    {{-- px-4 e col-12 mais para os celulares, col-md-6 para tablets col-lg-4 para desktop e mx-auto para centraliza-los quando juntos a grid  --}}
    <div class="px-4 col-12 col-md-6 col-lg-4 mx-auto">

        <div class="d-flex justify-content-center my-5">
            <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="Logo do Spotify">
        </div>

        <form action="">
            <div class="mb-4">
                <input type="text" class="form-control bg-secondary fw-medium border border-0" id="nome"
                    placeholder="Digite o seu nome">
            </div>

            <div class="mb-4">
                <input type="email" class="form-control bg-secondary fw-medium  border border-0" id="email"
                    placeholder="Digite o seu e-mail">
            </div>

            <div class="mb-4">
                <input type="password" id="password" class="form-control bg-secondary fw-medium  border border-0"
                    aria-describedby="passwordHelpBlock" placeholder="*********">
            </div>

            <div class="mb-4">
                <button class="btn btn-primary w-100">Cadastrar</button>
            </div>

        </form>
        <div class="text-center">
            <a href="{{ route('login') }}" class="text-decoration-none text-white">
                Já possui login? Faça o login
            </a>
        </div>
    </div>

</x-layout>
