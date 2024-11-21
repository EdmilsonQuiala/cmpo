<div id="tab-sign-up" class="tab tab-sign-up @if($tab == 'tab-sign-up') tab-active @endif">
    <div class="navbar navbar-home">
        <div class="navbar-inner">
            <div class="left"></div>
            <div class="title"><h2 style="color: #39673d; text-align: center">Criar Conta</h2></div>
            <div class="right"></div>
        </div>
    </div>
    <div class="sign-up segments">
        <div class="container">
            <div style="display: flex; justify-content: center; padding-bottom: 20px">
                <img src="{{ asset('frontend/images/afercon/logo/logo.png') }}" alt="" class="img-logo" width="40%">
            </div>
            <form class="list" id="sign-up-form" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- Adicione o CSRF Token -->
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="name" placeholder="Nome completo" name="name" id="name" required />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="number" placeholder="Seu telefone" name="phone" id="phone" required />
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
                                <input type="password" placeholder="Sua Senha" name="password" id="password" required />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="password" placeholder="Confirme sua Senha" name="repeat_password" id="repeat_password" required />
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-button">
                    <button type="button" class="button primary-button">Criar conta</button>
                </div>
            </form>

            <script>
                $(document).ready(function () {
                    $('#sign-up-form').on('submit', function (e) {
                        e.preventDefault(); // Previne o envio padrão do formulário

                        // Coletar os dados do formulário
                        let formData = {
                            _token: $('input[name="_token"]').val(), // CSRF Token
                            name: $('#name').val(),
                            phone: $('#phone').val(),
                            email: $('#email').val(),
                            password: $('#password').val(),
                            repeat_password: $('#repeat_password').val()
                        };

                        // Validação simples (opcional)
                        if (formData.password !== formData.repeat_password) {
                            alert("As senhas não coincidem!");
                            return;
                        }

                        // Enviar os dados via AJAX
                        $.ajax({
                            url: "{{ route('signUp') }}", // Substitua pela rota real
                            method: "POST",
                            data: formData,
                            success: function (response) {
                                alert("Conta criada com sucesso!");
                                // Redirecionar ou realizar outra ação
                                window.location.href = "{{ route('signIn') }}";
                            },
                            error: function (xhr, status, error) {
                                console.error(xhr.responseText); // Para debug
                                alert("Erro ao criar conta. Por favor, tente novamente.");
                            }
                        });
                    });
                });
            </script>

            <div class="divider-space-content"></div>

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
            </div>

            <div class="divider-space-content"></div>

            <div class="wrap-link-sign-up">
                <p>Já tem conta? <a href="#tab-sign-in" class="tab-link">Acessa aqui!</a></p>
            </div>
        </div>
    </div>
</div>
