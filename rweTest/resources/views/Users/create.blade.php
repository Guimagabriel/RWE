@extends('Users.home')
@section('content')

    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12 text-center fw-bold">
                    <img src="https://static.wixstatic.com/media/c5fb74_c0dfdfe8dc1f4942b587edb6d2a3c950~mv2.png/v1/fill/w_247,h_66,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RWE_Telemedicina_Transp_NV01.png" alt="RWE Telemedicina" style="max-width: 50em; margin: 20px; margin-left: 30px">
                </div>
            </div>
        </div>
        <div class="row mb-3 m-3">
            <h1 id="titulo">Cadastro de Usuário</h1>
        </div>
        <div class="row mb-3 m-3">
            <label for="name" class="col-sm-2 m-1 col-form-label">*Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" style="width: 35em;" placeholder="Digite seu nome">
                <span class="error-msg" style="display: none" id="name-error">Por favor, insira um nome válido.</span>
            </div>
        </div>
        <div class="row mb-3 m-3">
            <label for="email" class="col-sm-2 m-1 col-form-label">*Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" style="width: 35em;" placeholder="Digite seu email">
                <span class="error-msg" style="display: none" id="email-error">Por favor, insira um endereço de e-mail válido.</span>
            </div>
        </div>
        <div class="row mb-3 m-3">
            <label for="social_network" class="col-sm-2 m-1 col-form-label">Rede Sociais: (Opcional)</label>
            <div class="col-sm-10">
                <div class="input-group" style="width: 35em; margin-top: 5px;">
                <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                  </svg>
                </span>
                    <input type="text" class="form-control" name="social_network[facebook]" id="facebook" placeholder="Facebook">
                    <span class="error-msg" style="display: none" id="facebook-error">Por favor, insira um link de Facebook válido.</span>
                </div>
                <div class="input-group" style="width: 35em; margin-top: 5px;">
                <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                  </svg>
                </span>
                    <input type="text" class="form-control" name="social_network[twitter]" id="twitter" placeholder="Twitter">
                    <span class="error-msg" style="display: none" id="twitter-error">Por favor, insira um link de Twitter válido.</span>
                </div>
                <div class="input-group" style="width: 35em; margin-top: 5px;">
                <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                  </svg>
                </span>
                    <input type="text" class="form-control" name="social_network[instagram]" id="instagram" placeholder="Instagram">
                    <span class="error-msg" style="display: none" id="instagram-error">Por favor, insira um link de Instagram válido.</span>
                </div>
                <div class="input-group" style="width: 35em; margin-top: 5px;">
                <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4"></path>
                  </svg>
                </span>
                    <input type="text" class="form-control" name="social_network[linkedin]" id="linkedin" placeholder="Linkedin">
                    <span class="error-msg" style="display: none" id="linkedin-error">Por favor, insira um link de Linkedin válido.</span>
                </div>
            </div>
        </div>

        <div class="row mb-3 m-3">
            <label for="about" class="col-sm-2 m-1 col-form-label">Sobre mim: (Opcional)</label>
            <div class="col-sm-10">
                <textarea name="about" class="form-control" id="about" placeholder="Fala um pouco sobre você..." cols="40" rows="6"></textarea>
            </div>
        </div>

        <div class="row mb-3 m-4">
            <label for="formFile" class="col-sm-2 m-0.3 col-form-label">Foto: (Opcional)</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

        <button class="btn btn-primary row mb-4 m-4" style="width: 200px" type="submit">Cadastrar</button>
        <script>
            let emailField = document.querySelector("#email");
            let nameField = document.querySelector("#name");
            let facebookField = document.querySelector("#facebook");
            let instagramField = document.querySelector("#instagram");
            let twitterField = document.querySelector("#twitter");
            let linkedinField = document.querySelector("#linkedin");

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const facebookUrlRegex = /^(https?:\/\/)?(www\.)?facebook\.com\/[a-zA-Z0-9_\.]+\/?$/;
            const twitterUrlRegex = /^(https?:\/\/)?(www\.)?twitter\.com\/[a-zA-Z0-9_]+\/?$/;
            const instagramUrlRegex = /^(https?:\/\/)?(www\.)?instagram\.com\/[a-zA-Z0-9_]+\/?$/;
            const linkedinUrlRegex = /^(https?:\/\/)?(www\.)?linkedin\.com\/in\/[a-zA-Z0-9_-]+\/?$/;

            emailField.addEventListener('change',(element) => {
                let isValid = emailRegex.test(element.target.value);
                let spanField = document.querySelector("#email-error");
                if (isValid === true) {
                    spanField.style.display = 'none';
                    emailField.classList.remove('is-invalid');
                } else {
                    spanField.style.display = 'block';
                    emailField.classList.add('is-invalid');
                }
            });

            nameField.addEventListener('change', (element) => {
               let spanField = document.querySelector("#name-error")
               if (element.target.value.length > 3 || element.target.value == '') {
                   spanField.style.display = 'none';
                   nameField.classList.remove('is-invalid');
               } else {
                   spanField.style.display = 'block';
                   nameField.classList.add('is-invalid');
               }
            });

            facebookField.addEventListener('change',(element) => {
                let isValid = facebookUrlRegex.test(element.target.value);
                let spanField = document.querySelector("#facebook-error");
                if (isValid === true || element.target.value == '') {
                    spanField.style.display = 'none';
                    facebookField.classList.remove('is-invalid');
                } else {
                    spanField.style.display = 'block';
                    facebookField.classList.add('is-invalid');
                }
            });

            instagramField.addEventListener('change',(element) => {
                let isValid = instagramUrlRegex.test(element.target.value);
                let spanField = document.querySelector("#instagram-error");
                if (isValid === true || element.target.value == '') {
                    spanField.style.display = 'none';
                    instagramField.classList.remove('is-invalid');
                } else {
                    spanField.style.display = 'block';
                    instagramField.classList.add('is-invalid');
                }
            });

            twitterField.addEventListener('change',(element) => {
                let isValid = twitterUrlRegex.test(element.target.value);
                let spanField = document.querySelector("#twitter-error");
                if (isValid === true || element.target.value == '') {
                    spanField.style.display = 'none';
                    twitterField.classList.remove('is-invalid');
                } else {
                    spanField.style.display = 'block';
                    twitterField.classList.add('is-invalid');
                }
            });

            linkedinField.addEventListener('change',(element) => {
                let isValid = linkedinUrlRegex.test(element.target.value);
                let spanField = document.querySelector("#linkedin-error");
                if (isValid === true || element.target.value == '') {
                    spanField.style.display = 'none';
                    linkedinField.classList.remove('is-invalid');
                } else {
                    spanField.style.display = 'block';
                    linkedinField.classList.add('is-invalid');
                }
            });
        </script>
    </form>

@endsection