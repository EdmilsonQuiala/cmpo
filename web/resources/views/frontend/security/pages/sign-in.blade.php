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
            <form class="list" action="{{ route('signIn') }}">
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="email" placeholder="Seu email" name="email_sign_in" id="email_sign_in" />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="password" placeholder="Sua Senha" name="password_sign_in" id="password_sign_in" />
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-button">
                    <button type="submit" class="button primary-button">Aceder conta</button>
                </div>
            </form>

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
                <p>Não tem conta? <a href="#tab-sign-up" class="tab-link">Crie aqui!</a></p>
            </div>
        </div>
    </div>
</div>
