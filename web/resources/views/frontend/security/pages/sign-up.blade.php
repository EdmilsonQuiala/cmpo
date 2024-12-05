<div id="tab-sign-up" class="tab tab-sign-up @if ($tab == 'tab-sign-up') tab-active @endif">
    <div class="navbar navbar-home">
        <div class="navbar-inner">
            <div class="left"></div>
            <div class="title">
                <h2 style="color: #39673d; text-align: center">Criar Conta</h2>
            </div>
            <div class="right"></div>
        </div>
    </div>
    <div class="sign-up segments">
        <div class="container">
            <div style="display: flex; justify-content: center; padding-bottom: 20px">
                <img src="{{ asset('frontend/images/afercon/logo/logo.png') }}" alt="" class="img-logo"
                    width="40%">
            </div>

            <form class="list">
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Nome completo" name="name" id="name"
                                    required />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="number" placeholder="Seu telefone" name="phone" id="phone"
                                    required />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="email" placeholder="Seu email" name="email" id="email" required />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="password" placeholder="Sua Senha" name="password" id="password"
                                    required />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="password" placeholder="Confirme sua Senha" name="password_confirmation"
                                    id="repeat_password" required />
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-button">
                    <button type="button" name="sign_up" id="sign_up" class="button primary-button">Criar conta</button>
                </div>
            </form>

            <div id="messageContainerSignUp"></div>
            <div id="errorContainerSignUp"></div>

            <script>
                document.getElementById('sign_up').addEventListener('click', function() {
                    const password = document.getElementById('password').value;
                    const repeatPassword = document.getElementById('repeat_password').value;

                    // Validação local de senha
                    if (password !== repeatPassword) {
                        const messageContainerSignUp = document.getElementById('messageContainerSignUp');
                            const successMessage = `
                                <div class="list media-list">
                                    <ul>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                                                <div class="item-inner">
                                                    <div class="item-title-row">
                                                        <div class="item-title">info: As senhas não coincidem. Por favor, verifique.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            `;
                        messageContainerSignUp.innerHTML = successMessage;
                        return;
                    }

                    const formData = new FormData();
                    formData.append('name', document.getElementById('name').value);
                    formData.append('phone', document.getElementById('phone').value);
                    formData.append('email', document.getElementById('email').value);
                    formData.append('password', password);
                    formData.append('password_confirmation', repeatPassword); // Campo necessário

                    const signUpButton = document.getElementById('sign_up');
                    signUpButton.disabled = true;
                    signUpButton.style.backgroundColor = '#7a7a7a';
                    signUpButton.innerText = 'Aguarde...';

                    fetch("{{ route('signUp') }}", {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
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
                            const messageContainerSignUp = document.getElementById('messageContainerSignUp');
                            const successMessage = `
                                <div class="list media-list">
                                    <ul>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media"><i class="fas fa-check-circle" style="color: #39673d"></i></div>
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
                            messageContainerSignUp.innerHTML = successMessage;
                        })
                        .catch(error => {
                            const errorContainerSignUp = document.getElementById('errorContainerSignUp');
                            const errorMessages = Object.values(error.errors).map(err => `
                                <div class="list media-list">
                                    <ul>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media"><i class="fas fa-exclamation-triangle" style="color: #39673d"></i></div>
                                                <div class="item-inner">
                                                    <div class="item-title-row">
                                                        <div class="item-title">${err.join('<br>')} </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            `);
                            errorContainerSignUp.innerHTML = errorMessages.join('');
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
                <p>Já tem conta? <a href="#tab-sign-in" class="tab-link">Acessa aqui!</a></p>
            </div>
        </div>
    </div>
</div>
