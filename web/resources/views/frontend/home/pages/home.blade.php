<div id="tab-home" class="tab tab-active tab-home">
    <div class="navbar navbar-home">
        <div class="navbar-inner">
            <div class="left">
                {{-- <a href="#" class="panel-open" data-panel="left">
                    <i class="fas fa-bars"></i>
                </a> --}}
            </div>
            <div class="title">
                <h2 style="color: #39673d">AFERCON PAY</h2>
            </div>
            <div class="right">
                <a href="#tab-notification" class="tab-link">
                    <i class="fas fa-bell"></i>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="subnavbar">
        <form class="searchbar searchbar-init" data-search-container=".search-list" data-search-in=".item-title">
            <div class="searchbar-inner">
                <div class="searchbar-input-wrap">
                    <input type="search" placeholder="Pesquise por moedas...">
                    <i class="searchbar-icon"></i>
                    <span class="input-clear-button"></span>
                </div>
                <span class="searchbar-disable-button">Cancelar</span>
            </div>
        </form>
    </div>

    <div class="panel-backdrop"></div>

    <div class="categories segments">
        <div class="container">
            <div class="container segments">
                <div class="info-balance content-shadow">
                    <h5 style="text-align: center; padding: 20px 0 20px 0">Olá {{ $user->name }}!</h5>
                    <div class="row">
                        <div class="col-50">
                            <div class="content-text">
                                <p>Saldo Geral</p>
                                <h5>AOA <span class="hide_money">{{ number_format($balance, 2, ',', '.') }}</span></h5>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="content-button">
                                <button id="toggleHideMoney" class="button primary-button">
                                    <i class="fas fa-eye"></i> Ocultar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const toggleButton = document.getElementById('toggleHideMoney');
                        const moneyElements = document.querySelectorAll('.hide_money');
                        let isHidden = {{ $preference && $preference->hide_money === 'yes' ? 'true' : 'false' }};

                        // Função para atualizar o estado da interface
                        function updateInterface() {
                            if (isHidden) {
                                moneyElements.forEach(element => {
                                    element.setAttribute('data-original-value', element.textContent);
                                    element.textContent = '***';
                                });
                                toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i> Mostrar';
                            } else {
                                moneyElements.forEach(element => {
                                    element.textContent = element.getAttribute('data-original-value') || '{{ number_format($balance, 2, ',', '.') }}';
                                });
                                toggleButton.innerHTML = '<i class="fas fa-eye"></i> Ocultar';
                            }
                        }

                        // Inicializar interface com base na preferência salva
                        updateInterface();

                        toggleButton.addEventListener('click', function () {
                            isHidden = !isHidden;
                            updateInterface();

                            // Enviar solicitação para salvar a preferência
                            fetch("{{ route('toggleHideMoney') }}", {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                },
                                body: JSON.stringify({ hide_money: isHidden })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    console.log('Preferência salva com sucesso!');
                                } else {
                                    console.error('Erro ao salvar preferência:', data.message);
                                }
                            })
                            .catch(error => {
                                console.error('Erro:', error);
                            });
                        });
                    });
                </script>
            </div>
            <div class="row">
                <div class="col-30">
                    <div class="content">
                        <a id="redirectToAddMoney">
                            <div class="icon">
                                <i class="fa fa-plus-square"></i>
                            </div>
                            <span>Adicionar</span>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const redirectToAddMoney = document.getElementById('redirectToAddMoney');
                                redirectToAddMoney.addEventListener('click', function () {
                                    window.location.href = "{{ route('AddMoney') }}";
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="col-30">
                    <div class="content">
                        <a href="/categories-details/">
                            <div class="icon">
                                <i class="fa fa-upload"></i>
                            </div>
                            <span>Levantar</span>
                        </a>
                    </div>
                </div>
                <div class="col-30">
                    <div class="content">
                        <a href="/categories-details/">
                            <div class="icon">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <span>Enviar</span>
                        </a>
                    </div>
                </div>
                <div class="col-30">
                    <div class="content">
                        <a href="/categories-details/">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <span>Solicitar</span>
                        </a>
                    </div>
                </div>
                <div class="col-30">
                    <div class="content">
                        <a href="/categories-details/">
                            <div class="icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <span>Cartão virtual</span>
                        </a>
                    </div>
                </div>
                <div class="col-30">
                    <div class="content">
                        <a href="/categories-details/">
                            <div class="icon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <span>Scanear</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container segments">
        <div class="section-title">
            <h3>Movimentos</h3>
        </div>
        <div class="info-balance content-shadow">
            <div class="row">
                <div class="col-50">
                    <div class="content-text">
                        <p>Pagamento de internet</p>
                        <h5>AOA <span class="hide_money">{{ number_format('100', 2, ',', '.') }}</span></h5>
                    </div>
                </div>
                <div class="col-50">
                    <div class="content-button">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-25"><a href="#"><i class="fa fa-envelope"></i></a></div>
                            <div class="col-25"><a href="#"><i class="fa fa-download"></i></a></div>
                            <div class="col-25"><a href="#"><i class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <div class="content-text">
                        <p>Pagamento de internet</p>
                        <h5>AOA <span class="hide_money">{{ number_format('100', 2, ',', '.') }}</span></h5>
                    </div>
                </div>
                <div class="col-50">
                    <div class="content-button">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-25"><a href="#"><i class="fa fa-envelope"></i></a></div>
                            <div class="col-25"><a href="#"><i class="fa fa-download"></i></a></div>
                            <div class="col-25"><a href="#"><i class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <div class="content-text">
                        <p>Pagamento de internet</p>
                        <h5>AOA <span class="hide_money">{{ number_format('100', 2, ',', '.') }}</span></h5>
                    </div>
                </div>
                <div class="col-50">
                    <div class="content-button">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-25"><a href="#"><i class="fa fa-envelope"></i></a></div>
                            <div class="col-25"><a href="#"><i class="fa fa-download"></i></a></div>
                            <div class="col-25"><a href="#"><i class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flash-sale segments no-pd-b">
        <div class="container">
            <div class="section-title">
                <h3>Nossa cotação <i class="fas fa-chart-line"></i></h3>
            </div>
            <div class="section-title flash-s-title">
                <h3></h3>
                <div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="product-mark-discount">
                                        <ul>
                                            <li>1</li>
                                            <li>10%</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('frontend/images/afercon/moedas/dolar-2.png') }}" alt="flash-sale">
                                    <div class="text">
                                        <p>= 850 Kwanzas <span></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="product-mark-discount">
                                        <ul>
                                            <li>1</li>
                                            <li>30%</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('frontend/images/afercon/moedas/euro-2.png') }}" alt="flash-sale">
                                    <div class="text">
                                        <p>= 930 Kwanzas <span></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="product-mark-discount">
                                        <ul>
                                            <li>1</li>
                                            <li>2%</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('frontend/images/afercon/moedas/brazilian-real_2.png') }}" alt="flash-sale">
                                    <div class="text">
                                        <p>= 520 Kwanzas <span></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="product-mark-discount">
                                        <ul>
                                            <li>1</li>
                                            <li>3%</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('frontend/images/afercon/moedas/yen-2.png') }}" alt="flash-sale">
                                    <div class="text">
                                        <p>= 680 Kwanzas <span></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
