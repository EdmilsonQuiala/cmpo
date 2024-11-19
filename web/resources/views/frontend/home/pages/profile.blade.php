<div id="tab-profile" class="page-content tab">

    <div class="navbar navbar-page">
        <div class="navbar-inner">
            <div class="left"></div>
            <div class="title">
                Account Buyer
            </div>
            <div class="right">
                <a href="/settings/">
                    <i class="fas fa-cog"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="account-buyer segments">
        <div class="container">
            <div class="header-account content-shadow">
                <img src="{{ asset('frontend/images/user-buyer6.png') }}" alt="">
                <div class="title-name">
                    <h5>Nome Sobrenome</h5>
                    <p><i class="fas fa-map-marker-alt"></i>Luanda - Angola</p>
                </div>
            </div>
        </div>
        <div class="container segments">
            <div class="info-balance content-shadow">
                <div class="row">
                    <div class="col-50">
                        <div class="content-text">
                            <p>Seu Saldo</p>
                            <h5>$310.00</h5>
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="content-button">
                            <a href="#" class="button primary-button"><i class="fas fa-eye"></i>Ocultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-menu">
            <form class="list" action="">
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Nome Completo" name="name" id="name" />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="email" placeholder="Seu Email" name="email" id="email" />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="number" placeholder="Seu Telefone" name="phone" id="phone" />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="password" placeholder="Sua Senha" name="password" id="password" />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="password" placeholder="Confirmar Senha" name="password_confirmation" id="password_confirmation" />
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-button">
                    <button type="submit" class="button primary-button">Atualizar dados</button>
                </div>
            </form>
        </div>
    </div>

</div>
