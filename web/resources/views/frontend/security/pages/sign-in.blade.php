<div id="tab-sign-in" class="tab tab-sign-in @if($tab == 'tab-sign-in') tab-active @endif">
    <div class="navbar navbar-home">
        <div class="navbar-inner">
            <div class="left"></div>
            <div class="title"><h2 style="color: #39673d; text-align: center">Acessar Conta</h2></div>
            <div class="right"></div>
        </div>
    </div>
    <div class="sign-up segments">
        <div class="container">
            <div style="display: flex; justify-content: center; padding-bottom: 20px">
                <img src="{{ asset('frontend/images/afercon/logo/logo.png') }}" alt="" class="img-logo" width="40%">
            </div>
            <form class="list" id="loginForm">
                <ul>
                    <!-- Campo de E-mail -->
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input
                                    type="email"
                                    placeholder="Seu email"
                                    name="email_sign_in"
                                    id="email_sign_in"
                                    required
                                />
                            </div>
                        </div>
                    </li>

                    <!-- Campo de Senha -->
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input
                                    type="password"
                                    placeholder="Sua Senha"
                                    name="password_sign_in"
                                    id="password_sign_in"
                                    required
                                />
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- Botão de Login -->
                <div class="content-button">
                    <button
                        type="button"
                        id="sign_in"
                        class="button primary-button"
                    >
                        Aceder conta
                    </button>
                </div>
            </form>

            <!-- Containers para mensagens -->
            <div id="messageContainerSignIn"></div>
            <div id="errorContainerSignIn"></div>

            <script>
                document.getElementById('sign_in').addEventListener('click', function () {
                    const email = document.getElementById('email_sign_in').value.trim();
                    const password = document.getElementById('password_sign_in').value.trim();
                    const messageContainerSignIn = document.getElementById('messageContainerSignIn');
                    const errorContainerSignIn = document.getElementById('errorContainerSignIn');

                    // Limpar mensagens anteriores
                    messageContainerSignIn.innerHTML = '';
                    errorContainerSignIn.innerHTML = '';

                    // Validação local básica
                    if (!email || !password) {
                        errorContainerSignIn.innerHTML = `
                            <div class="list media-list">
                                <ul>
                                    <li>
                                        <a href="#" class="item-link item-content">
                                            <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title-row">
                                                    <div class="item-title">Por favor, preencha todos os campos.</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        `;
                        return;
                    }

                    // Exibir mensagem de carregamento
                    messageContainerSignIn.innerHTML = `
                        <div class="list media-list">
                            <ul>
                                <li>
                                    <a href="#" class="item-link item-content">
                                        <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-title">Aguarde...</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    `;

                    // Enviar os dados para o servidor
                    const formData = new FormData();
                    formData.append('email', email);
                    formData.append('password', password);

                    const signInButton = document.getElementById('sign_in');
                    signInButton.disabled = true;
                    signInButton.style.backgroundColor = '#7a7a7a';
                    signInButton.innerText = 'Aguarde...';

                    fetch("{{ route('signIn') }}", {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(data => {
                                throw data;
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        messageContainerSignIn.innerHTML = `
                            <div class="list media-list">
                                <ul>
                                    <li>
                                        <a href="#" class="item-link item-content">
                                            <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title-row">
                                                    <div class="item-title">${data.message}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        `;

                        // Redirecionar após sucesso
                        setTimeout(() => {
                            window.location.href = "{{ route('home') }}";
                        }, 2000);
                    })
                    .catch(error => {
                        const errorMessages = Object.values(error.errors || {}).map(err => `
                            <div class="list media-list">
                                <ul>
                                    <li>
                                        <a href="#" class="item-link item-content">
                                            <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title-row">
                                                    <div class="item-title">${err.join('<br>')}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        `);
                        errorContainerSignIn.innerHTML = errorMessages.join('');


                        signInButton.disabled = false;
                        signInButton.style.backgroundColor = '#39673d';
                        signInButton.innerText = 'Tentar novamente';
                    });
                });

            </script>

{{--             <div class="divider-space-content"></div>

            <div class="wrap-sign-up-with">
                <div class="title">
                    <p>Ou utilize sua conta</p>
                    <span></span>
                </div>
                <div class="wrap-media-sign-up">
                    <div class="row">
                        <div class="col-50">
                            <a href="#">
                                <div class="content bg-primary">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-50">
                            <a href="#">
                                <div class="content bg-primary">
                                    <i class="fab fa-google"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="divider-space-content"></div>

            <div class="wrap-link-sign-up">
                <p>Não tem conta? <a href="#tab-sign-up" class="tab-link">Crie aqui!</a></p>
            </div>
        </div>
    </div>
</div>
