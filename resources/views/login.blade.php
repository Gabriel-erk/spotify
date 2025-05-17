<x-layout title="Spotify - Login">
    <div class="d-flex justify-content-center my-5">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo do Spotify" style="width: 50vw">
    </div>

    <div>
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
                <button class="btn btn-primary fw-bold w-100">Acessar</button>
            </div>

        </form>
        <a href="#" class="text-decoration-none">
            <p class="text-white fw-bold text-center fw-medium ">Ainda não possui conta? Cadastre-se</p>
        </a>
    </div>
</x-layout>
